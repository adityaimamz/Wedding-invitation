<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Irsalina & Sidik Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- simplyCountdown -->
    <link rel="stylesheet" href="{{ asset('countdown/simplyCountdown.theme.default.css') }}" />
    <script src="{{ asset('countdown/simplyCountdown.min.js') }}"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Dancing+Script&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section id="hero"
        class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <div class="sakura-falling"></div>
            <img src="{{ asset('img/right-flower.png') }}" alt="image-top-right" class="top-right-decoration">
            <img src="{{ asset('img/left-flower.png') }}" alt="image-top-left" class="top-left-decoration">
            <div class="title">
                <h4>Kepada Yth <span id="greeting">Bapak/Ibu/Saudara/i, </span></h4>
                <h1>Irsalina Faradis</h1>
                <h2>&</h2>
                <h1>Mas'ud Sidik</h1>
                <h3>Are getting married</h3>
                <p>
                    Akan melangsungkan resepsi pernikahan dalam
                </p>
            </div>
            <div class="simply-countdown"></div>
            <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a>
        </main>
    </section>

    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
        <div class="container">
            <a class="navbar-brand" href="#">Irsalina & Sidik</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dino</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#home">Home</a>
                        <a class="nav-link" href="#info">Info</a>
                        <a class="nav-link" href="#gallery">Konfirmasi</a>
                        <a class="nav-link" href="#rsvp">Doa</a>
                        <a class="nav-link" href="#gifts">Gifts</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Acara Pernikahan</h2>
                    <h3>Diselenggarakan pada 24 Juni 2024 di Tegal, Jawa Tengah.</h3>
                    <p>Oleh karena itu, dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i,
                        untuk hadir
                        pada acara pernikahan kami. </p>
                </div>
            </div>

            <div class="row couple">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-8 text-end">
                            <h3>Irsalina Faradis</h3>
                            <p>Putra dari Bpk. Susanto <br> dan <br> Ibu rantau Ekasari</p>
                        </div>
                        <div class="col-4">
                            <img src="img/asli2.jpg" alt="Irsalina Faradis" class="img-responsive rounded-circle">

                        </div>
                    </div>
                </div>

                <span class="heart"><i class="bi bi-heart-fill"></i></span>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/asli1.jpg" alt="Mas'ud Sidik" class="img-responsive rounded-circle">
                        </div>
                        <div class="col-8">
                            <h3>Mas'ud Sidik</h3>
                            <p>Putra dari Bpk. Sarnawi <br> dan <br> Ibu Raenih</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Informasi Acara</h2>
                    <p class="alamat">Tempat: Di Kediaman Mempelai Wanita <br> Jl. Jatisari no 20 RT 02 RW 03 Debong
                        Tengah Tegal</p>


                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2602557490264!2d109.13106979999999!3d-6.885689799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9c8515cb419%3A0xf2e86823d05ba08e!2sJl.%20Jatisari%20No.21%2C%20Debong%20Tengah%2C%20Kec.%20Tegal%20Sel.%2C%20Kota%20Tegal%2C%20Jawa%20Tengah%2052132!5e0!3m2!1sid!2sid!4v1716564700010!5m2!1sid!2sid"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <a href="https://maps.app.goo.gl/MX948GQ1YvdeqKtX6" target="_blank"
                        class="btn btn-light btn-sm my-3">Klik untuk
                        membuka peta</a>
                    <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan
                        namun tidak
                        ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadwal, atau salah
                        tempat.</p>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light mb-5">
                        <div class="card-header">Akad Nikah</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>08.00 - 11.00</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Senin, 24 Juni 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh
                            prosesi.
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">Resepsi Nikah</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>11.00 - 14.00 WIB</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Senin, 24 Juni 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh
                            prosesi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2 class="mb-2">Konfirmasi Kehadiran</h2>
                    <p class="mb-5">Kami tidak sabar menunggu hari pernikahan kami Bersama Bapak/Ibu/Saudara/i, mohon
                        konfirmasi kehadiran melalui form RSVP dibawah ini</p>
                </div>
            </div>
            <div>
                @livewire('konfirmasi-form')
            </div>
        </div>
    </section>

    <div>
        @livewire('komentar-form')
    </div>

    <section id="gifts" class="gifts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>ungkapan tanda kasih</span>
                    <h2>Kirim Hadiah</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iure perferendis provident ab
                        aliquam nemo.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="fw-bold">BCA</div>
                            123456789 - IRSALINA FARADIS
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold">MANDIRI</div>
                            987654321 - MAS'UD SIDIK
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold">Saweria</div>
                            <img src="img/saweria.png" alt="Saweria QR" class="img-thumbnail" width="150">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <small class="block">&copy; 2024 Aditya Imam Zuhdi. All Rights Reserved.</small>
                    <small class="block">Design by <a
                            href="https://www.instagram.com/adityaimamz/">@adityaimamz</a>.</small>

                    <ul class="mt-3">
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="audio-container">
        <audio id="song" autoplay loop>
            <source src="audio/bermuara.mp3" type="audio/mp3">
        </audio>

        <div class="audio-icon-wrapper" style="display: none;">
            <i class="bi bi-disc"></i>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 6, // required
            day: 24, // required
            hours: 8, // Default is 0 [0-23] integer
            words: { //words displayed into the countdown
                days: {
                    singular: 'hari',
                    plural: 'hari'
                },
                hours: {
                    singular: 'jam',
                    plural: 'jam'
                },
                minutes: {
                    singular: 'menit',
                    plural: 'menit'
                },
                seconds: {
                    singular: 'detik',
                    plural: 'detik'
                }
            },
        });
    </script>

    <script>
        // Get the query parameter value
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const greeting = urlParams.get('to');

        // Update the greeting text if a value is present
        if (greeting) {
            document.getElementById('greeting').innerText = greeting + ', ';
        }
    </script>

    <script>
        const stickyTop = document.querySelector('.sticky-top');
        const offcanvas = document.querySelector('.offcanvas');

        offcanvas.addEventListener('show.bs.offcanvas', function() {
            stickyTop.style.overflow = 'visible';
        });

        offcanvas.addEventListener('hidden.bs.offcanvas', function() {
            stickyTop.style.overflow = 'hidden';
        });
    </script>

    <script>
        const rootElement = document.querySelector(":root");
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
        const audioIcon = document.querySelector('.audio-icon-wrapper i');
        const song = document.querySelector('#song');
        let isPlaying = false;

        function disableScroll() {
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            window.onscroll = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }

            rootElement.style.scrollBehavior = 'auto';
        }

        function enableScroll() {
            window.onscroll = function() {}
            rootElement.style.scrollBehavior = 'smooth';
            // localStorage.setItem('opened', 'true');
            playAudio();
        }

        function playAudio() {
            song.volume = 0.1;
            audioIconWrapper.style.display = 'flex';
            song.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick = function() {
            if (isPlaying) {
                song.pause();
                audioIcon.classList.remove('bi-disc');
                audioIcon.classList.add('bi-pause-circle');
            } else {
                song.play();
                audioIcon.classList.add('bi-disc');
                audioIcon.classList.remove('bi-pause-circle');
            }

            isPlaying = !isPlaying;
        }

        // if (!localStorage.getItem('opened')) {
        //   disableScroll();
        // }
        disableScroll();
    </script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const nama = urlParams.get('n') || '';
        const pronoun = urlParams.get('p') || 'Bapak/Ibu/Saudara/i';
        const namaContainer = document.querySelector('.hero h4 span');
        namaContainer.innerText = `${pronoun} ${nama},`.replace(/ ,$/, ',');

        document.querySelector('#nama').value = nama;
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/timoschaefer/jQuery-Sakura/jquery-sakura.min.js'></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
