


@extends('Home')

@section('content')
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <section id="about-2" class="about-2 section light-background">


                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
                        <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                            <div class="img">
                                <img src="https://www.ardesogrenciyurdu.com/wp-content/uploads/2024/07/72.webp" alt="circle image" class="img-fluid">

                            </div>
                        </div>
                    </div>

                    <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
                        <div class="px-3">
                            <span class="content-subtitle">HOŞGELDİNİZ</span>
                            <h2 class="content-title text-start">
                                Çomü Terzioğlu Kampüsü'ndeki Tek Özel Yurttasın
                            </h2>
                            <p class="lead">
                                Tüm fakültelere, Üniversite Hastanesi'ne ve kütüphaneye komşu konumda olup, yürüyüş mesafesindedir. Ayrıca, şehrin her noktasına ulaşım sağlayan otobüs hatlarının ilk kalkış noktasıdır. Ders aralarında yorgun düşüp kısa bir dinlenme mi yapmak istiyorsunuz? Ardes'te olmak bu konuda da büyük bir avantaj sağlıyor!
                            </p>
                            <p class="mb-5">
                                Kampüs içinde yer alan tek özel yurt olan Ardes, üniversite hayatınızı kolaylaştırmak için burada.
                            </p>
                            <p>
                                <a href="#" class="btn-get-started">iletişim</a>
                            </p>
                        </div>
                    </div>
                </div>

    </section><!-- /About 2 Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

        <div class="container">
            <div class="row gy-4 justify-content-center">

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up">
                        <div class="services-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <div>
                            <h3>Şehrin her noktasına ulaşım kolaylığı</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="services-icon">
                            <i class="bi bi-command"></i>
                        </div>
                        <div>
                            <h3>Konforlu ve modern odalar</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="services-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <div>
                            <h3>Kampüs içindeki tek özel yurt</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Plans</p>
            <h2>Frequently Asked Questions</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="custom-accordion" id="accordion-faq">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                                    How to download and register?
                                </button>
                            </h2>

                            <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                                <div class="accordion-body">
                                    Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts. Separated
                                    they live in Bookmarksgrove right at the coast of the Semantics,
                                    a large language ocean.
                                </div>
                            </div>
                        </div>
                        <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2" "="">
                                How to create your paypal account?
                                </button>
                            </h2>
                            <div id="collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">

                            <div class="accordion-body">
                                    A small river named Duden flows by their place and supplies it
                                    with the necessary regelialia. It is a paradisematic country, in
                                    which roasted parts of sentences fly into your mouth.
                                </div>
                            </div>
                        </div>
                        <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                                    How to link your paypal and bank account?
                                </button>
                            </h2>

                            <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                                <div class="accordion-body">
                                    When she reached the first hills of the Italic Mountains, she
                                    had a last view back on the skyline of her hometown
                                    Bookmarksgrove, the headline of Alphabet Village and the subline
                                    of her own road, the Line Lane. Pityful a rethoric question ran
                                    over her cheek, then she continued her way.
                                </div>
                            </div>
                        </div>
                        <!-- .accordion-item -->

                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Faq Section -->


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


@endsection
