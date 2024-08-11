<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Thailand by Detiktravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/registration.css') }}">
</head>

<body>
    <div class="content-1" id="home">
        <nav class="navbar navbar-expand-lg bg-body-secondary" style="position: fixed;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#home">detik<span>travel</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang-program">Tentang Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#berita">Berita</a>
                    </li>
                    <button type="button" class="nav-button"
                        onclick="window.location.href='{{ url('/registration') }}';">Registrasi</button>

                </ul>
            </div>
        </nav>
        <div class="carousel">

            <div class="list">

                <div class="item"
                    style="background-image: url({{ asset('storage/assets/images/background1.png') }});">
                    <div class="brand">
                        <div class="explore"></div>
                        <button class="brand-button" href="#tentang-program">TENTANG PROGRAM</button>
                    </div>
                </div>
                <div class="item"
                    style="background-image: url({{ asset('storage/assets/images/background2.png') }});">
                    <div class="brand">
                        <div class="explore"></div>
                        <button class="brand-button" href="#tentang-program">TENTANG PROGRAM</button>
                    </div>
                </div>
                <div class="item"
                    style="background-image: url({{ asset('storage/assets/images/background3.png') }});">
                    <div class="brand">
                        <div class="explore"></div>
                        <button class="brand-button" href="#tentang-program">TENTANG PROGRAM</button>
                    </div>
                </div>
                <div class="item"
                    style="background-image: url({{ asset('storage/assets/images/background1.png') }});">
                    <div class="brand">
                        <div class="explore"></div>
                        <button class="brand-button" href="#tentang-program">TENTANG PROGRAM</button>
                    </div>
                </div>
                <div class="item"
                    style="background-image: url({{ asset('storage/assets/images/background2.png') }});">
                    <div class="brand">
                        <div class="explore"></div>
                        <button class="brand-button" href="#tentang-program">TENTANG PROGRAM</button>
                    </div>
                </div>
                <div class="item"
                    style="background-image: url({{ asset('storage/assets/images/background3.png') }});">
                    <div class="brand">
                        <div class="explore"></div>
                        <button class="brand-button" href="#tentang-program">TENTANG PROGRAM</button>
                    </div>
                </div>

            </div>

            <!--next prev button-->
            <div class="arrows">
                <button class="prev">&larr;
                </button>
                <button class="next">&rarr;
                </button>
            </div>


            <!-- time running -->
            <div class="timeRunning"></div>

        </div>

        <div class="content-2" id="tentang-program">
            <div class="about-image">
                <img src="{{ asset('storage/assets/images/about-image 1.png') }}" alt="">
            </div>
            <div class="title">
                <h1>Tentang Program</h1>
                <p>Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca
                    Detiktravel
                    yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia
                    Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah
                    jalan-jalan yang tak terlupakan!
                </p>
                <button class="nav-button" href="{{ url('/registration') }}">DAFTAR SEKARANG</button>
                <img src="{{ asset('storage/assets/images/Frame 12352.png') }}" alt="image">
            </div>
        </div>

        <div class="content-3" id="berita">
            <div class="container-fluid">
                <a class="navbar-brand" href="#berita">detik<span>travel <b>Update</b></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="berita-content">
                <div class="thumbnail">
                    <img src="{{ asset('storage/assets/images/thumbnail-artikel-1.png') }}" alt="doraemon">
                    <div class="desc">
                        <h4>Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggil Hujan</h4>
                        <p>3 jam yang lalu</p>
                    </div>
                </div>
                <div class="other-thumbnail">
                    <div class="artikel-1">
                        <img src="{{ asset('storage/assets/images/artikel-1.png') }}" alt="">
                        <div class="describe">
                            <p>Thailand Ngarep Cuan Banyak dari Turis China dan Jepang</p>
                            <span>1 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="artikel-2">
                        <img src=""{{ asset('storage/assets/images/artikel-2.png') }}" alt="">
                        <div class="describe">
                            <p>Cahaya Lampu Hiasi Kuil Wat Phra Dhammakaya Thailand Saat Waisakg</p>
                            <span>1 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="artikel-3">
                        <img src="{{ asset('storage/assets/images/artikel-3.png') }}" alt="">
                        <div class="describe">
                            <p>Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand</p>
                            <span>1 jam yang lalu</span>
                        </div>
                    </div>
                    <button type="submit" class="berita-button" style="font-weight: 600;">Lihat Berita
                        Lainnya &rarr;
                    </button>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer">
                <img src="{{ asset('storage/assets/images/Group1.png') }}" alt="">
                <div class="foot">
                    <div class="foot-desc">
                        <p>
                            Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi
                            pembaca
                            Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan
                            seperti
                            pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan
                            kami
                            dan
                            menangkan hadiah jalan-jalan yang tak terlupakan!
                        </p>
                    </div>
                    <div class="foot-sosmed">
                        <div class="sosmed">
                            <p>
                                Connect With Us
                            </p>
                            <img src="{{ asset('storage/assets/images/circle.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <hr
                    style="border: none; height: 3px; background-color: white; width: 1385px; position: relative; left: 60px; opacity: 1;">
                <div class="copyright">
                    <p>Copyright @ 2023 detikcom. All right reserved</p>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('storage/assets/js/app.js') }}"></script>
</body>

</html>
