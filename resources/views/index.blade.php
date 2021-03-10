@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Je vous propose des solutions modernes pour développer votre entreprise</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Je suis un développeur spécialisé dans le développement
                        Web et Mobile.
                        Jetez un œil à mon travail et si vous l'aimez, j'aimerais avoir de vos nouvelles!</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Commencer</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/hero-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>QUI ?</h3>
                            <h2>Je suis Abdoul ZAKARI, un développeur web full-stack indépendant. Je vis avec une
                                passion intense pour le web,
                                en particulier dans le monde de l'architecture et du développement fonctionnel.</h2>
                            <p>
                                J'accepte actuellement les demandes de nouveaux projets, en particulier ceux qui
                                conçoivent et construisent des applications Web/Mobiles sophistiquées à l'aide d'outils
                                et de cadres modernes (Vue js, React.JS/React Native, GraphQL, Node.JS,
                                Laravel/Symfony).
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Services</h2>
                    <p>Ce que je peux faire pour vous</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>App Web</h3>
                            <p>Creation, maintenances préventives et curatives, Conception et développement de nouvelles
                                fonctionnalités de site internet</p>
                            <a href="#" class="read-more"><span>Plus</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Développement de fonctionnalités</h3>
                            <p>Création, mise à jour de fonctionnalités, tests unitaires et fonctionnels, Optimiser les
                                performances des outils et déploiement</p>
                            <a href="#" class="read-more"><span>Plus</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Création de Dashboard Admin</h3>
                            <p>Graphiques statistiques des vistes et action effectuées sur le site</p>
                            <a href="#" class="read-more"><span>Plus</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Mise en place d'API</h3>
                            <p>Intégrer des API tierces aux projets, Creation d'API et Documentation</p>
                            <a href="#" class="read-more"><span>Plus</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h3>App Mobile</h3>
                            <p>Création, mise à jour, ajout de fonctionnalités, déploiement d'application mobile avec un
                                Dashboard.</p>
                            <a href="#" class="read-more"><span>Plus</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Disign</h3>
                            <p>Un site Web doit être correctement visualisé sur une grande variété d'écrans. Je m'assure
                                que votre site Web est toujours utilisable de manière optimale sur n'importe quel
                                appareil, n'importe quel système d'exploitation et n'importe quel navigateur Web.</p>
                            <a href="#" class="read-more"><span>Plus</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Portfolio</h2>
                    <p>Consultez mes derniers travaux</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Toutes</li>
                            <li data-filter=".filter-app">App Mobile</li>
                            <li data-filter=".filter-design">Web Design</li>
                            <li data-filter=".filter-web">App Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-1.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Up Your Performance Basketball Academy (iOS + Android)</h4>
                                <p>Mobile Application Development</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-1.png') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="UYP Basketball Academy"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.upyourperformance.upyourperformance"
                                        title="More Details" target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-2.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>UYP Basketball Academy Dashboard</h4>
                                <p>Mobile Application Development</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-2.png') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="UYP Basketball Academy"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.upyourperformance.upyourperformance"
                                        title="More Details" target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> Lancer USA Mobile App (iOS + Android)</h4>
                                <p>Mobile Application Development</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Lancer US‪A"><i class="bi bi-plus"></i></a>
                                    <a href="https://apps.apple.com/us/app/lancer-usa/id639358441" title="More Details"
                                        target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-4.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Project WireFrame</h4>
                                <p>WireFrame</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-4.png') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                                    <a href="https://www.figma.com/file/i2GLyyTOLq11amO3ptXbCM/OFFISHALL?node-id=53%3A2"
                                        title="More Details" target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-5.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> Skill Set Connect Mobile App (iOS + Android)‬ </h4>
                                <p>Mobile Application Development</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-5.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Skill Set Connec‪t‬ "><i class="bi bi-plus"></i></a>
                                    <a href="https://apps.apple.com/us/app/skill-set-connect/id1450928887?ls=1"
                                        title="More Details" target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-6.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Work revelution</h4>
                                <p>OFFISHALL</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-6.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="OFFISHALL"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="phttps://www.figma.com/file/i2GLyyTOLq11amO3ptXbCM/OFFISHALL?node-id=54%3A96"
                                        title="More Details" target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-7.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>420DC.com (iOS + Android)</h4>
                                <p>Mobile Application Development</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-7.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="420DC.com (iOS + Android)"><i class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details" target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-8.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Stroke Awareness Foundation (iOS + Android)</h4>
                                <p>Mobile Application Development</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-8.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Stroke Awareness Foundation"><i class="bi bi-plus"></i></a>
                                    <a href="https://apps.apple.com/us/app/stroke-awareness-foundation/id956746312"
                                        title="More Details" target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-9.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Le Mail Français(Systeme d'emailing)</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-9.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Le Mail Français"><i class="bi bi-plus"></i></a>
                                    <a href="https://lemailfrancais.app/fr/presentation" title="More Details"
                                        target="_blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-10.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Webreathe (creation de Dashboard)</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-10.png') }}"
                                        dataWgallery="portfolioGallery" class="portfokio-lightbox" title="webreathe"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="https://www.webreathe.fr/" title="More Details" target="_blank"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-11.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Landrink (Full Platforme)</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-11.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Landrink"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="http://landrick.vue.themesbrand.com/" title="More Details" target="_blank"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-12.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Park Auto Prestige (Réservation de place de parking)</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-12.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Park Auto Prestige"><i class="bi bi-plus"></i></a>
                                    <a href="https://parkautoprestige.com/" title="More Details" target="_blank"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Me Contacter</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Addresse</h3>
                                    <p>28, rue de Picardie<br>
                                        93290 Tramblay-En-France</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Me Contacter</h3>
                                    <p>(+33) 06 46 51 79 55</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>abdoul.zkri@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Horaires</h3>
                                    <p>Lundi - Vendredi<br>9:00H - 19:00H</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nom" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Sujet" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Envoie</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Votre message a bien été envoyé, Merci!</div>

                                    <button type="submit">Envoyer</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <span>DevPlus</span>
                        </a>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Liens</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">A propos</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Dev Web</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Dev Mobile</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Me contacter</h4>
                        <p>
                            28, rue de Picardie<br>
                            93290 Tramblay-En-France<br><br>
                            <strong>Phone:</strong> (+33) 06 46 51 79 55<br>
                            <strong>Email:</strong> abdoul.zkri@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
