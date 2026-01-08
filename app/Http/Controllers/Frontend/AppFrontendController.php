<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;



class AppFrontendController extends Controller
{
    public function home()
    {
        return view('views-frontend.layouts.app-frontend');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        Contact::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Votre message a été envoyé avec succès.'
        ]);
    }

    public function send(Request $request)
    {
        // Validation (équivalent des if/empty/filter_var)
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Envoi de l’email
        Mail::to('random@example.com')
            ->send(new ContactMessageMail($validated));

        return response()->json([
            'message' => 'Thank You! Your message has been sent.'
        ], 200);
    }
}