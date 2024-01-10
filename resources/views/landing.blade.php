<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
 ================================================== -->
    <meta charset="utf-8">
    <title>Diagnosis Depresi</title>
    <meta name="description" content="Professional Creative Template" />
    <meta name="author" content="IG Design">
    <meta name="keywords"
        content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
    <meta property="og:title" content="Professional Creative Template" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="470" />
    <meta property="og:image:height" content="246" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="Professional Creative Template" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
    <meta name="twitter:domain" content="http://ivang-design.com/" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="Professional Creative Template" />
    <meta name="twitter:image" content="http://ivang-design.com/" />

    <!-- Mobile Specific Metas
 ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <!-- Web Fonts
 ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- CSS
 ================================================== -->
    <link rel="stylesheet" href="landing/css/bootstrap.min.css" />
    <link rel="stylesheet" href="landing/css/font-awesome.min.css" />
    <link rel="stylesheet" href="landing/css/style.css" />
    <link rel="stylesheet" href="landing/css/colors/color.css" />
    <link rel="stylesheet" href="landing/css/ionicons.min.css" />
    <link rel="stylesheet" href="landing/css/owl.carousel.css" />
    <link rel="stylesheet" href="landing/css/owl.transitions.css" />

    <!-- Favicons
 ================================================== -->
    <link rel="icon" href="{{ asset('/assets/img/logo unisa.png') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


</head>

<body class="royal_preloader">
    <nav id="menu-wrap" class="menu-back cbp-af-header">
        <div class="menu">
            <a href="/">
                <div class="logo"></div>
            </a>
            <ul>
                <li>
                    <a class="shadow-hover" href="#home">Home</a>
                </li>
                <li>
                    <a class="shadow-hover" href="#tim">Tim</a>
                </li>
                <li>
                    <a class="shadow-hover" href="#faq">FAQ</a>
                </li>
                <li>
                    <a class="shadow-hover" href="#tentang">Tentang</a>
                </li>

                @guest()
                <li>
                    <a class="shadow-hover" href="/login">Login </span><small>(untuk admin)</small></a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <!-- Primary Page Layout
 ================================================== -->

    <main>

        <!-- Hero Section -->

        <section id="home">
        <div class="section full-height mob-height">
            <div class="background-parallax" style="background-image: url('landing/img/bg-home.jpg')"
                data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
            <div class="hero-center-text-wrap">
                <div class="container text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <br>
                            <h1 class="parallax-fade-top-2 typed">Cek Tingkat <strong>Depresimu</strong>
                                Sekarang!<br><span id="typed-1"></span></h1>
                            <br>
                            <style>
                                .btn-glow:hover {
                                  box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
                                  transition: box-shadow 0.5s;
                                }
                              </style>
                              <div style="margin-left: 12px">

                                <a href="/form"  class="btn btn-dark btn-glow" role="button" style="color: rgb(255, 140, 32)">
                                  Cek Depresimu Sekarang
                                </a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Tim Section -->
        <section id="tim">
        <div class="section padding-top-big">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center mb-5">
                        <h4>Kelompok 1</h4>
                        <p class="lead">Sistem Pakar</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="team-wrap">
                            <img src="landing/img/wahyu.jpg" alt="Foto Wahyu Fajri">
                            <p>Anggota 0</p>
                            <h6>Wahyu Fajri</h6>
                            <div class="social-team">
                                <ul class="list-social-team">
                                    <li class="icon-team tipped" data-title="<span>github</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09b;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>pinterest</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf231;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 m-xl-0 text-center">
                        <div class="team-wrap">
                            <img src="landing/img/yoginda.jpg" alt="Foto Yoginda Putri Bektiningsih">
                            <p>Anggota 1</p>
                            <h6>Yoginda Putri Bektiningsih</h6>
                            <div class="social-team">
                                <ul class="list-social-team">
                                    <li class="icon-team tipped" data-title="<span>twitter</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf099;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>istagram</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09a;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 m-md-0 text-center">
                        <div class="team-wrap">
                            <img src="landing/img/naufal.jpg" alt="Foto Naufal Cahyo Pradana D">
                            <p>Anggota 2</p>
                            <h6>Naufal Cahyo Pradana D</h6>
                            <div class="social-team">
                                <ul class="list-social-team">
                                    <li class="icon-team tipped" data-title="<span>github</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09b;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>pinterest</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf231;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>facebook</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09a;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 m-md-0 text-center">
                        <div class="team-wrap">
                            <img src="landing/img/naufalF.jpg" alt="Foto Naufal fadhila">
                            <p>Anggota 3</p>
                            <h6>Naufal fadhila</h6>
                            <div class="social-team">
                                <ul class="list-social-team">
                                    <li class="icon-team tipped" data-title="<span>github</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09b;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>pinterest</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf231;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>facebook</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09a;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 m-md-0 text-center">
                        <div class="team-wrap">
                            <img src="landing/img/ahmad.jpg" alt="Foto Ahmad Lamsia">
                            <p>Anggota 4</p>
                            <h6>Ahmad Lamsia</h6>
                            <div class="social-team">
                                <ul class="list-social-team">
                                    <li class="icon-team tipped" data-title="<span>github</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09b;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>pinterest</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf231;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>facebook</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09a;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- FAQ Section -->
        <section id="faq">
            <div class="section padding-top-big">
            <div class="container">
                <h2 class="text-center">Pertanyaan yang Sering Diajukan - FAQ</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu DepresiGauge?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                DepresiGauge adalah sebuah situs yang membantu mahasiswa akhir mengukur tingkat depresi
                                mereka dengan mengisi formulir pertanyaan. Kami menyediakan solusi sesuai setelah
                                mahasiswa mengisi formulir tersebut.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Siapa yang bisa mengakses DepresiGauge?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                DepresiGauge ditujukan untuk mahasiswa akhir, namun siapa saja dapat mengakses situs ini
                                dan mengisi formulir untuk mengetahui tingkat depresi mereka.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apakah hasil dari DepresiGauge dapat diandalkan?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                Hasil dari DepresiGauge adalah sebuah estimasi dari tingkat depresi seseorang, dan tidak
                                bisa dianggap sebagai diagnosis yang pasti. Kami sangat menyarankan agar seseorang yang
                                merasa memiliki tingkat depresi yang tinggi untuk segera meminta bantuan profesional.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Bagaimana cara mengakses solusi yang ditawarkan DepresiGauge?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                Setelah mengisi formulir, mahasiswa akan menerima rekomendasi solusi sesuai dengan
                                tingkat depresi yang terdeteksi. Kami juga menyediakan tautan ke sumber informasi dan
                                bantuan profesional yang dapat membantu mahasiswa mengatasi depresi mereka.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- Tentang Section -->
        <section id="tentang">
        <div class="section padding-top-big padding-bottom-big">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 page-center-text-wrap text-center">
                        <h1 class="parallax"><strong>-</strong> Project Case Based Learning
                            <strong>-</strong><br><span>Sistem Pakar</span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section padding-top-bottom-big background-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div id="owl-sep-1" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"DepresiGauge adalah situs yang membantu mahasiswa akhir mengukur
                                        tingkat depresi mereka dengan mengisi formulir pertanyaan. Kami percaya bahwa
                                        mengetahui tingkat depresi Anda adalah langkah pertama dalam menemukan solusi
                                        dan menangani masalah ini. Selain itu, kami juga menyediakan informasi dan
                                        sumber daya yang berguna untuk membantu Anda dalam mengelola depresi Anda."</p>
                                    <h6>
                                        <h6>&rarr;</h6>
                                    </h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"Ingatlah bahwa DepresiGauge bukanlah pengganti layanan
                                        profesional, jadi pastikan untuk selalu mencari bantuan medis yang tepat jika
                                        Anda mengalami gejala depresi."</p>
                                    <h6>&rarr;</h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"Kami membuat DepresiGauge sebagai proyek akhir mata kuliah Sistem Pakar untuk membantu
                                        teman-teman kami yang mungkin mengalami depresi untuk mengetahui tingkat depresi
                                        mereka dan menemukan solusi sesuai."</p>
                                    <h6>&rarr;</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>


    <!-- JAVASCRIPT
    ================================================== -->
    <script src="landing/js/jquery.js"></script>
    <script src="landing/js/royal_preloader.min.js"></script>
    <script src="landing/js/popper.min.js"></script>
    <script src="landing/js/bootstrap.min.js"></script>
    <script src="landing/js/plugins.js"></script>
    <script src="landing/js/custom.js"></script>
    <script>
        // Type text

        var typed = new Typed('#typed-1', {
            strings: ['diagnosis', 'solusi', 'atasi'],
            typeSpeed: 45,
            backSpeed: 0,
            startDelay: 200,
            backDelay: 2200,
            loop: true,
            loopCount: false,
            showCursor: true,
            cursorChar: "",
            attr: null
        });
    </script>
    <!-- End Document
================================================== -->
</body>

</html>
