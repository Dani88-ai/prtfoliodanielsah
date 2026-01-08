<h3>Nouveau message de contact</h3>

<p><strong>Nom :</strong> {{ $data['name'] }}</p>
<p><strong>Email :</strong> {{ $data['email'] }}</p>
<p><strong>Téléphone :</strong> {{ $data['phone'] ?? 'Non renseigné' }}</p>
<p><strong>Sujet :</strong> {{ $data['subject'] }}</p>

<hr>

<p>{{ $data['message'] }}</p>