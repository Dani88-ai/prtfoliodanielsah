<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Daniel sah - Personal Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="onepage, html5 template, portfolio template">
    <meta name="description" content="Maslin - Personal Portfolio HTML Template, one page template">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:200,300,400,500,600,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Site Main Style sheet css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-wapper">
        <div class="loader-middle"></div>
    </div>
    <!-- Prealoader End -->

    <!-- Page Wrapper Section Start -->
    <div class="maslin-page-wrapper">

        @include('views-frontend.layouts._navbar')
        <!-- Home Section Start -->
        <header id="home" class="home-area hero-equal-height overflow-hidden section-padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2">
                        <div class="text-center home-content z-index position-relative">
                            <h1>Daniel SAH</h1>
                            <p>Ingénieur Informaticien avec plus de 5 ans d'expérience en administration systèmes et
                                réseaux.</p>
                            <p>J'aide les entreprises et organisations en développant des solutions IT robustes et
                                sécurisées. Je conçois des infrastructures pour garantir votre succès à long terme.
                                Spécialisé en <span class="element" data-text1="administration systèmes."
                                    data-text2="administration réseaux." data-text3="développement web."
                                    data-loop="true" data-backdelay="1500"></span></p>
                            <a href="#contact" class="button js-scroll">Me Contacter</a>
                        </div>
                    </div>
                    <div class="social">
                        <a class="text">Réseaux Sociaux</a>
                        <div class="line"></div>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="mailto:daniel.sah.pro@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        <a href="tel:+237655333275"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Home Section End -->



        <!-- About Section Start -->
        <section id="about" class="about-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>À Propos de Moi</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="about-image">
                            <img src="{{ asset('assets/img/about.png') }}" alt="Daniel SAH - Ingénieur Informaticien">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="about-content">
                            <h3>Bienvenue sur <span class="color-text">Mon Profil</span></h3>
                            <h3>- C'est un plaisir de me présenter.</h3>
                            <p>Bonjour, je suis <strong class="color-text">Daniel SAH, Ingénieur Informaticien basé au
                                    Cameroun</strong>. Avec plus de 5 ans d'expérience dans l'administration systèmes et
                                réseaux, le support utilisateur, la cybersécurité et la gestion de projets IT, j'ai
                                développé une expertise approfondie dans la mise en place et la sécurisation
                                d'infrastructures informatiques complexes.</p>
                            <br>
                            <h3>Quelles sont mes valeurs ?</h3>
                            <p>Dans chaque projet IT, je me concentre sur la compréhension des besoins métiers et la
                                livraison de solutions robustes, sécurisées et pérennes qui garantissent le succès à
                                long terme de mes clients. Ma force réside dans ma capacité à vulgariser les outils
                                techniques et à former efficacement les utilisateurs.</p>
                            <br>
                            <p><b>Téléphone :</b> +237 655 333 275 / 654 263 686
                                <br><b>E-mail :</b> daniel.sah.pro@gmail.com
                                <br><b>Localisation :</b> Cameroun
                                <br><b>Disponibilité :</b> Freelance & Projets IT
                            </p>
                            <a href="{{ asset('assets/CV_Daniel_SAH.pdf') }}" class="button js-scroll"
                                download>Télécharger mon
                                CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->
        <!-- Skill Section Start -->
        <section class="skill-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Compétences Techniques</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Administration Systèmes -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Windows Server & Linux</h4>
                                <span class="float-right">95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="95">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Réseaux -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Réseaux (TCP/IP, VLAN, VPN, Cisco, Mikrotik)</h4>
                                <span class="float-right">90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="90">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cybersécurité -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Cybersécurité (Firewall, IDS/IPS)</h4>
                                <span class="float-right">85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="85">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Virtualisation -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Virtualisation (VMware, Hyper-V)</h4>
                                <span class="float-right">85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="85">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Développement Web -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Développement Web (PHP, Python, Django, Laravel)</h4>
                                <span class="float-right">80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="80">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bases de données -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Bases de Données (MySQL, PostgreSQL)</h4>
                                <span class="float-right">85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="85">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Scripting -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Scripting (Bash, PowerShell, Python)</h4>
                                <span class="float-right">80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="80">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud & AI -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Cloud Computing (AWS) & IA</h4>
                                <span class="float-right">75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="75">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support & Formation -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Support Utilisateur & Formation</h4>
                                <span class="float-right">95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="95">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gestion de Projets IT -->
                    <div class="col-md-6 skill-box">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Gestion de Projets IT</h4>
                                <span class="float-right">90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                    aria-valuenow="90">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skill Section End -->

        <!-- Service Section Start -->
        <section id="service" class="service-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Mes Services</h2>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <div class="row">
                        <!-- Administration Systèmes et Réseaux -->
                        <div class="col-lg-4 col-md-6 services-item">
                            <div class="single-services-box">
                                <div class="single-services">
                                    <div class="services-icon"> <i class="pe-7s-server"></i> </div>
                                    <div class="services-text">
                                        <h3>Administration Systèmes & Réseaux</h3>
                                        <p>Installation, configuration et maintenance d'infrastructures Windows/Linux.
                                            Gestion de parcs informatiques avec un taux de disponibilité supérieur à
                                            98%.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cybersécurité -->
                        <div class="col-lg-4 col-md-6 services-item">
                            <div class="single-services-box">
                                <div class="single-services">
                                    <div class="services-icon"> <i class="pe-7s-shield"></i> </div>
                                    <div class="services-text">
                                        <h3>Cybersécurité</h3>
                                        <p>Sécurisation des systèmes et réseaux (Firewall, IDS/IPS). Mise en place de
                                            politiques de sécurité et formation des utilisateurs aux bonnes pratiques.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Développement Web -->
                        <div class="col-lg-4 col-md-6 services-item">
                            <div class="single-services-box">
                                <div class="single-services">
                                    <div class="services-icon"> <i class="pe-7s-display1"></i> </div>
                                    <div class="services-text">
                                        <h3>Développement Web</h3>
                                        <p>Conception et développement de sites web institutionnels sécurisés. Maîtrise
                                            de PHP, Python, Django, Laravel et des architectures web modernes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gestion de Projets IT -->
                        <div class="col-lg-4 col-md-6 services-item">
                            <div class="single-services-box">
                                <div class="single-services">
                                    <div class="services-icon"> <i class="pe-7s-graph1"></i> </div>
                                    <div class="services-text">
                                        <h3>Gestion de Projets IT</h3>
                                        <p>Coordination de projets informatiques de A à Z. Rédaction de cahiers des
                                            charges, suivi des livrables et respect des délais avec coordination de
                                            multiples prestataires.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Support & Formation -->
                        <div class="col-lg-4 col-md-6 services-item">
                            <div class="single-services-box">
                                <div class="single-services">
                                    <div class="services-icon"> <i class="pe-7s-users"></i> </div>
                                    <div class="services-text">
                                        <h3>Support & Formation Utilisateurs</h3>
                                        <p>Assistance technique de proximité et à distance. Formation de plus de 200
                                            utilisateurs sur les outils bureautiques et la cybersécurité (taux de
                                            satisfaction > 90%).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sauvegarde & Continuité -->
                        <div class="col-lg-4 col-md-6 services-item">
                            <div class="single-services-box">
                                <div class="single-services">
                                    <div class="services-icon"> <i class="pe-7s-cloud-upload"></i> </div>
                                    <div class="services-text">
                                        <h3>Sauvegarde & Reprise après Sinistre</h3>
                                        <p>Mise en œuvre de politiques de sauvegarde et de reprise après sinistre.
                                            Restauration des données critiques garantie en moins de 2 heures.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section End -->

        <!-- Counter Section Start -->
        <section class="counter-area section-padding">
            <div class="container">
                <div class="counter-inner-box">
                    <div class="row">
                        <!-- Années d'expérience -->
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="single-counter-box">
                                <div class="single-counter">
                                    Plus <h3 class="odometer" data-count="5">00</h3>
                                    <p>Années d'Expérience</p>
                                </div>
                            </div>
                        </div>

                        <!-- Postes gérés -->
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="single-counter-box">
                                <div class="single-counter">
                                    <h3 class="odometer" data-count="150">00</h3>
                                    <p>Postes Gérés </p>
                                </div>
                            </div>
                        </div>

                        <!-- Utilisateurs formés -->
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="single-counter-box">
                                <div class="single-counter">
                                    <h3 class="odometer" data-count="200">00</h3>
                                    <p>Utilisateurs Formés</p>
                                </div>
                            </div>
                        </div>

                        <!-- Taux de disponibilité -->
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="single-counter-box">
                                <div class="single-counter">
                                    <h3 class="odometer" data-count="98">00 </h3>(%)
                                    <p>Taux de Disponibilité </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Section End -->
        <!-- Project Section Start -->
        <section id="project" class="project-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Projets Récents</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-list">
                            <ul class="nav" id="project-flters">
                                <li class="filter filter-active" data-filter=".all">Tous</li>
                                <li class="filter" data-filter=".webdev">Développement Web</li>
                                <li class="filter" data-filter=".infrastructure">Infrastructure IT</li>
                                <li class="filter" data-filter=".security">Cybersécurité</li>
                                <li class="filter" data-filter=".formation">Formation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-container">
                        <!-- Projet 1: Site Codas Caritas Garoua -->
                        <div class="col-lg-4 col-md-6 project-grid-item all webdev">
                            <a class="project-item" href="https://codascaritasgaroua.org" target="_blank">
                                <img src="{{ asset('assets/img/projects/frontendcodascaritasgaroua.png') }}"
                                    alt="Site Codas Caritas Garoua">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Site Web Codas Caritas Garoua</h4>
                                        <h6>Voir le Projet</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Projet 2: Site Archidiocèse de Garoua -->
                        <div class="col-lg-4 col-md-6 project-grid-item all webdev">
                            <a class="project-item" href="https://archidiocesegaroua.org" target="_blank">
                                <img src="{{ asset('assets/img/projects/archidiocesesite.png') }}"
                                    alt="Site Archidiocèse de Garoua">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Site Web Archidiocèse de Garoua</h4>
                                        <h6>Voir le Projet</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Projet 3: Infrastructure Réseau PCP-ACEFA -->
                        <div class="col-lg-4 col-md-6 project-grid-item all infrastructure">
                            <a class="project-item" href="https://pcpacefa.org" target="_blank">
                                <img src="{{ asset('assets/img/projects/infractructurepcpacefa.png') }}"
                                    alt="Infrastructure Réseau et outils ACEFA">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Infrastructure Réseau Régionale</h4>
                                        <h6>150+ Postes | 200+ Utilisateurs</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Projet 4: Politique de Sécurité -->
                        <div class="col-lg-4 col-md-6 project-grid-item all security">
                            <a class="popup-img project-item"
                                href="{{ asset('assets/img/projects/Crtitère_secu.png') }}">
                                <img src="{{ asset('assets/img/projects/Crtitère_secu.png') }}"
                                    alt="Politique de Cybersécurité">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Mise en Place Politique de Sécurité</h4>
                                        <h6>Firewall, IDS/IPS & Formation</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Projet 5: Plan de Reprise après Sinistre -->
                        <div class="col-lg-4 col-md-6 project-grid-item all infrastructure security">
                            <a class="popup-img project-item"
                                href="{{ asset('assets/img/projects/schema-fonctionnement-pra-1024x537-1.png') }}">
                                <img src="{{ asset('assets/img/projects/schema-fonctionnement-pra-1024x537-1.png') }}"
                                    alt="Plan de Reprise après Sinistre">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Plan de Reprise après Sinistre</h4>
                                        <h6>Sauvegarde & Restauration < 2h</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Projet 6: Formation Utilisateurs -->
                        <div class="col-lg-4 col-md-6 project-grid-item all formation">
                            <a class="popup-img project-item" href="assets/img/projects/formation-users.jpg">
                                <img src="assets/img/projects/formation-users.jpg" alt="Formation Utilisateurs">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Formation de 200+ Utilisateurs</h4>
                                        <h6>Taux de Satisfaction > 90%</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Projet 7: Serveur WebRadio Communautaire -->
                        <div class="col-lg-4 col-md-6 project-grid-item all infrastructure webdev">
                            <a class="popup-img project-item"
                                href="{{ asset('assets/img/projects/webradio-server.jpg') }}">
                                <img src="{{ asset('assets/img/projects/webradio-server.jpg') }}"
                                    alt="Serveur WebRadio">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Serveur WebRadio Communautaire</h4>
                                        <h6>Radio Marie-Madeleine</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Projet 8: Gestion Parc Informatique PNDP -->
                        <!--  <div class="col-lg-4 col-md-6 project-grid-item all infrastructure">
                            <a class="popup-img project-item" href="{{ asset('assets/img/projects/parc-pndp.jpg') }}">
                                <img src="{{ asset('assets/img/projects/parc-pndp.jpg') }}" alt="Gestion Parc PNDP">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Gestion Parc Informatique PNDP</h4>
                                        <h6>Administration & Maintenance</h6>
                                    </div>
                                </div>
                            </a>
                        </div> -->

                        <!-- Projet 9: Installation Systèmes Sécurité SOCATRACK -->
                        <div class="col-lg-4 col-md-6 project-grid-item all security infrastructure">
                            <a class="popup-img project-item" href="{{ asset('assets/img/projects/sodecoton.png') }}">
                                <img src="{{ asset('assets/img/projects/sodecoton.png') }}" alt="Systèmes de Sécurité">
                                <div class="project-img-overlay">
                                    <div class="project-content">
                                        <h4>Systèmes de Contrôle d'Accès Sodecoton de GarouaS</h4>
                                        <h6>Caméras & Baies de Brassage Sodecoton de Garoua</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Section End -->

        <!-- Testimonials Section Start -->
        <section id="review" class="testimonial-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Témoignages Clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="testimonial-slide" class="owl-carousel owl-theme owl-loaded owl-drag">

                            <!-- Témoignage 1: PCP-ACEFA -->
                            <div class="single-testimonial">
                                <div class="testi-content-inner">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/logoacefa.png') }}" alt="Client PCP-ACEFA">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3>"Un professionnel rigoureux et très pédagogue"</h3>
                                        <p>Daniel a géré notre infrastructure informatique régionale avec une efficacité
                                            remarquable. Son expertise en administration systèmes et sa capacité à
                                            former nos équipes ont considérablement amélioré notre productivité. Taux de
                                            disponibilité de 98% maintenu sur 3 ans !</p>
                                    </div>
                                    <div class="testimonial-bio">
                                        <div class="bio-info">
                                            <h3 class="name">Equipe PCP-ACEFA</h3>
                                            <span>Coordination Nationale </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Témoignage 2: Archidiocèse de Garoua -->
                            <div class="single-testimonial">
                                <div class="testi-content-inner">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/archidiocese_garoua.jpg') }}"
                                            alt="Client Archidiocèse">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3>"Un site web professionnel et sécurisé"</h3>
                                        <p>Daniel a conçu et développé notre site institutionnel avec professionnalisme.
                                            Il a su comprendre nos besoins et livrer une plateforme moderne, sécurisée
                                            et facile à administrer. Sa disponibilité et son accompagnement ont été
                                            exceptionnels.</p>
                                    </div>
                                    <div class="testimonial-bio">
                                        <div class="bio-info">
                                            <h3 class="name">Equie archidioècese de Garoua</h3>
                                            <span>Responsable Communication, Archidiocèse de Garoua</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Témoignage 3: SOCATRACK -->
                            <div class="single-testimonial">
                                <div class="testi-content-inner">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/armelwato.jpeg') }}" alt="Référence SOCATRACK">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3>"Compétent et autonome sur les projets techniques"</h3>
                                        <p>Daniel a fait preuve d'une grande expertise dans l'installation de nos
                                            systèmes de contrôle d'accès et de surveillance. Son travail sur le montage
                                            des baies de brassage réseau à la Sodecoton a été réalisé avec précision et
                                            dans les délais impartis.</p>
                                    </div>
                                    <div class="testimonial-bio">
                                        <div class="bio-info">
                                            <h3 class="name">Ing. Armel TAKOU</h3>
                                            <span>Responsable Technique, SOCATRACK</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Témoignage 4: Utilisateur Formé -->
                            <div class="single-testimonial">
                                <div class="testi-content-inner">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/logoacefa.png') }}" alt="Utilisateur Formé">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3>"Des formations claires et adaptées à nos besoins"</h3>
                                        <p>Les sessions de formation de Daniel sur les outils bureautiques et la
                                            cybersécurité ont été très enrichissantes. Il sait vulgariser les concepts
                                            techniques et rendre l'informatique accessible à tous. Son support technique
                                            est toujours réactif et efficace.</p>
                                    </div>
                                    <div class="testimonial-bio">
                                        <div class="bio-info">
                                            <h3 class="name">Equipe PCP-ACEFA</h3>
                                            <span>Coordination Régionale de l'Est</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Témoignage 5: Codas Caritas -->
                            <div class="single-testimonial">
                                <div class="testi-content-inner">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/logocodascaritagaroua1.png') }}"
                                            alt="Client Codas Caritas">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3>"Un partenaire fiable pour nos projets web"</h3>
                                        <p>Daniel a développé notre site web institutionnel avec une attention
                                            particulière aux détails. Son respect des délais, sa réactivité et la
                                            qualité de son travail en ont fait un partenaire de confiance pour notre
                                            organisation.</p>
                                    </div>
                                    <div class="testimonial-bio">
                                        <div class="bio-info">
                                            <h3 class="name">Equipe Codas Caritas Garoua</h3>
                                            <span>Coordination Générale</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Section End -->
        <!-- Contact Section Start -->
        <section id="contact" class="contact-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-title">
                        <h2>Me Contacter</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="row contact-information">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-details">
                                    <i class="fa fa-phone"></i>
                                    <h6>Appelez-moi</h6>
                                    <p>+237 655 333 275</p>
                                    <p>+237 654 263 686</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-details">
                                    <i class="fa fa-map-marker"></i>
                                    <h6>Localisation</h6>
                                    <p>Cameroun</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-details">
                                    <i class="fa fa-envelope"></i>
                                    <h6>Envoyez-moi un email</h6>
                                    <p>daniel.sah.pro@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-details">
                                    <i class="fa fa-clock-o"></i>
                                    <h6>Disponibilité</h6>
                                    <p>Lun - Ven : 8h00 - 18h00</p>
                                    <p>Sam : Sur rendez-vous</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <p class="form-message"></p>
                        <br>
                        <form class="contact-form form" id="contact-form" action="{{ route('contact.send') }}"
                            method="POST">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group has-error has-danger">
                                            <input id="form_name" type="text" name="name"
                                                placeholder="Votre Nom Complet" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group has-error has-danger">
                                            <input id="form_email" type="email" name="email"
                                                placeholder="Votre Adresse Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group has-error has-danger">
                                            <input id="form_phone" type="tel" name="phone"
                                                placeholder="Votre Numéro de Téléphone (optionnel)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group has-error has-danger">
                                            <input id="form_subject" type="text" name="subject"
                                                placeholder="Sujet de votre Message" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message"
                                                placeholder="Décrivez votre projet ou votre besoin..." rows="4"
                                                required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="button"
                                            data-text="Envoyer le Message"><span>Envoyer le
                                                Message</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->











        <!-- Map Section Start -->
        <div class="map-area">
            <div class="map-contact">
                <div id="map"></div>
            </div>
        </div>
        <!-- Map Section End -->

        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- Page Wrapper Section End -->

    @include('views-frontend.layouts._footer')



    <!-- Back to Top -->
    <a href="#" class="back-to-top back-to-top-pulse"><i class="fa fa-caret-up"></i></a>

    <!--Jquery js-->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/typed.js') }}"></script>

    <!-- Google Analytics (optionnel) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>

    <!-- Configuration Typed.js pour l'animation du texte -->
    <script>
    // Animation du texte dans la section Home
    if (document.querySelector('.element')) {
        var typed = new Typed('.element', {
            strings: [
                "administration systèmes.",
                "sécurité réseau.",
                "développement web.",
                "gestion de projets IT."
            ],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 2000,
            loop: true
        });
    }
    </script>

    <!-- Google Maps Script -->
    <script>
    function initMap() {
        // Coordonnées de Yaoundé, Cameroun
        var yaounde = {
            lat: 3.8480,
            lng: 11.5021
        };

        // Créer la carte avec style personnalisé
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: yaounde,
            styles: [{
                    "featureType": "all",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "weight": "2.00"
                    }]
                },
                {
                    "featureType": "all",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#9c9c9c"
                    }]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "on"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#46bcec"
                    }, {
                        "lightness": 17
                    }]
                }
            ]
        });

        // Ajouter un marqueur
        var marker = new google.maps.Marker({
            position: Garoua,
            map: map,
            title: 'Daniel SAH - Ingénieur Informaticien',
            animation: google.maps.Animation.DROP
        });

        // Info window avec informations de contact
        var contentString = '<div style="padding:15px; max-width:250px;">' +
            '<h4 style="margin:0 0 10px 0; color:#333;">Daniel SAH</h4>' +
            '<p style="margin:5px 0; color:#666;"><strong>Ingénieur Informaticien</strong></p>' +
            '<p style="margin:5px 0; color:#666;">Yaoundé, Cameroun</p>' +
            '<p style="margin:10px 0 5px 0;">' +
            '<a href="tel:+237655333275" style="color:#007bff; text-decoration:none;"><i class="fa fa-phone"></i> +237 655 333 275</a><br>' +
            '<a href="mailto:daniel.sah.pro@gmail.com" style="color:#007bff; text-decoration:none;"><i class="fa fa-envelope"></i> daniel.sah.pro@gmail.com</a>' +
            '</p></div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        // Ouvrir l'info window au clic
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        // Ouvrir l'info window par défaut
        infowindow.open(map, marker);
    }
    </script>

    <!-- Chargez l'API Google Maps (remplacez YOUR_API_KEY par votre clé) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

    <!-- Script de validation du formulaire de contact -->
    <script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        var messageDiv = document.querySelector('.form-message');

        fetch('mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                messageDiv.innerHTML =
                    '<div class="alert alert-success">' +
                    data +
                    '</div>';
                document.getElementById('contact-form').reset();

                // Masquer le message après 5 secondes
                setTimeout(function() {
                    messageDiv.innerHTML = '';
                }, 5000);
            })
            .catch(error => {
                messageDiv.innerHTML =
                    '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
            });
    });
    </script>

    <!--Site Main js-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Script personnalisé pour les compteurs -->
    <script>
    // Animation des compteurs au scroll
    function animateCounters() {
        const counters = document.querySelectorAll('.odometer');

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                const speed = 200; // Vitesse d'animation
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };

            // Observer pour détecter quand le compteur est visible
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            observer.observe(counter);
        });
    }

    // Initialiser les animations au chargement
    document.addEventListener('DOMContentLoaded', function() {
        animateCounters();
    });
    </script>

</body>

</html>