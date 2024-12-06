<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- TITLE -->
    <link rel="icon" href="{{ asset('assets/img/icon-pertamina.png') }}">
    <title>Pertamina</title>

    <!-- GOOGLE FONTS POPPINS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- ANIMATED ON SCROLL -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo-pertamina.png') }}" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 {{ request()->is('career') ? 'active' : '' }}" href="#career">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 {{ request()->is('investor') ? 'active' : '' }}"
                            href="#menu">Investor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 {{ request()->is('berita') ? 'active' : '' }}" href="#berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 {{ request()->is('tentang-kami') ? 'active' : '' }}"
                            href="#about">Tentang Kami</a>
                    </li>

                </ul>
                <div>
                    <button class="button-secondary">
                        Daftar
                    </button>
                    <button class="button-primary">
                        Masuk
                    </button>
                </div>
            </div>
        </div>
    </nav>

    {{-- SECTION BERITA --}}
    <section class="berita-page">
        <div class="container mt-5" data-aos="fade-left" data-aos-delay="200">
            <h1 class="title text-start">Hubungan Investor</h1>
            <div class="column">
                <img src="{{ asset('assets/img/berita-page1.jpg') }}" alt="" class="img-beritapage img-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="sub-title">Sebagai perusahaan BUMN yang 100% sahamnya dimiliki oleh pemerintah Indonesia, Pertamina senantiasa menjaga akuntabilitas perusahaan dengan menyediakan informasi yang akurat.</h1>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <img src="{{ asset('assets/img/berita-page2.jpg') }}" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="flash-news">
                    <h3>Pertamina Flash Sale</h3>
                    <h6>Executive Leadership Transition at Pertamina</h6>
                    <p>
                        As of 4th November 2024, PT Pertamina (Persero) has restructured the Board of Commissioners and Directors. The Minister of State-Owned Enterprises held a General Meeting of Shareholders (GMS) and appointed Mochamad Iriawan as President Commissioner, Dony Oskaria as Deputy Commissioner, Raden Adjeng Sondaryani as Independent Commissioner, and Simon Aloysius Mantiri as President Director and CEO of PT Pertamina (Persero).
                    </p>
                </div>
                <div class="grid-menu">
                    <div class="grid-item">
                        <img src="{{ asset('assets/img/berita-page2.jpg') }}" alt="" class="img-responsive">
                        <h5>Keuangan</h5>
                    </div>
                    <div class="grid-item">
                        <img src="{{ asset('assets/img/berita-page2.jpg') }}" alt="" class="img-responsive">
                        <h5>Keuangan</h5>
                    </div>
                    <div class="grid-item">
                        <img src="{{ asset('assets/img/berita-page2.jpg') }}" alt="" class="img-responsive">
                        <h5>Keuangan</h5>
                    </div>
                    <div class="grid-item">
                        <img src="{{ asset('assets/img/berita-page2.jpg') }}" alt="" class="img-responsive">
                        <h5>Keuangan</h5>
                    </div>
                    <div class="grid-item">
                        <img src="{{ asset('assets/img/berita-page2.jpg') }}" alt="" class="img-responsive">
                        <h5>Keuangan</h5>
                    </div>
                    <div class="grid-item">
                        <img src="{{ asset('assets/img/berita-page2.jpg') }}" alt="" class="img-responsive">
                        <h5>Keuangan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION BERITA --}}




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
