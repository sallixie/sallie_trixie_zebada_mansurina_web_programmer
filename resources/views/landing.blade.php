<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Agen X</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="/landing_assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/landing_assets/css/font-rubiklato.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700%7CRubik:300,400,500" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        {{-- icon --}}
        <link rel="favicon" sizes="180x180" href="/logo.png">
    </head>
    <body class=" ">
        <a id="start"></a>
        <div class="nav-container ">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <a href="index.html">
                                <img class="logo logo-dark" alt="logo" src="/logo.png" />
                                <img class="logo logo-light" alt="logo" src="/logo.png" />
                            </a>
                        </div>
                        <div class="col-9 col-md-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->
            <nav id="menu2" class="bar bar-2 hidden-xs bar--absolute bar--transparent bg--dark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 text-center text-left-sm hidden-xs order-lg-2">
                            <div class="bar__module">
                                <a href="/">
                                    <img class="logo-dark" alt="logo" src="/logo.png" />
                                    <img class="logo-light" alt="logo" src="/logo.png" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-5 order-lg-1"></div>
                        <div class="col-lg-5 text-right text-left-xs text-left-sm order-lg-3"></div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
            <!--end bar-->
        </div>
        <div class="main-container">
            <section class="cover cover-fullscreen text-center height-100 imagebg" data-overlay="3">
                <div class="background-image-holder">
                    <img alt="background" src="/landing_assets/img/music-1.jpg" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-10 col-lg-8">
                            <h1 class="type--uppercase h1--large">AGEN X</h1>
                            <p class="lead mb-0">
                              Pesan Tiketmu Disini! dan nikmati konser musik terbaik di Indonesia
                            </p>
                            <a class="btn btn--lg type--uppercase" href="#pesan">
                                <span class="btn__text">
                                    Pesan
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="text-center space--lg imagebg parallax" id="pesan" data-overlay="3">
                <div class="background-image-holder">
                    <img alt="background" src="/landing_assets/img/music-2.jpg" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8">
                            <div class="heading-block">
                                <h3 class="type--uppercase">Formulir Pendaftaran</h3>
                                <form action="/pesan" method="post" id="form-pesan">
                                  @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="nama" placeholder="Nama Lengkap"/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="no_hp" placeholder="Nomor Handphone" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" placeholder="Email" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="alamat" placeholder="Alamat" />
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn--lg type--uppercase" id="btn-pesan">
                                        <span class="btn__text">
                                            Pesan
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="bg--dark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="heading-block text-center">
                                <h3 class="type--uppercase">Rundown</h3>
                            </div>
                            <table class="border--round table--alternate-row">
                                <thead>
                                    <tr>
                                        <th>Pukul</th>
                                        <th>Kegiatan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>08.00</td>
                                        <td>Registrasi</td>
                                        <td>Peserta melakukan registrasi dengan menunjukkan tiket kepada panitia</td>
                                    </tr>
                                    <tr>
                                        <td>09.00</td>
                                        <td>Opening</td>
                                        <td>Opening dibuka oleh MC</td>
                                    </tr>
                                    <tr>
                                        <td>09.30</td>
                                        <td>Band Slank</td>
                                        <td>Penampilan band Slank membawakan 3 lagu</td>
                                    </tr>
                                    <tr>
                                        <td>10.00</td>
                                        <td>Secondhand Serenade</td>
                                        <td>Penampilan Secondhand Serenade membawakan 3 lagu</td>
                                    </tr>
                                    <tr>
                                        <td>10.30</td>
                                        <td>The Script</td>
                                        <td>Penampilan The Script membawakan 3 lagu</td>
                                    </tr>
                                    <tr>
                                        <td>11.00</td>
                                        <td>The Chainsmokers</td>
                                        <td>Penampilan The Chainsmokers membawakan 3 lagu</td>
                                    </tr>
                                    <tr>
                                        <td>11.30</td>
                                        <td>For Revenge</td>
                                        <td>Penampilan band For Revenge membawakan 3 lagu</td>
                                    </tr>
                                    <tr>
                                        <td>12.00</td>
                                        <td>Red Velvet</td>
                                        <td>Penampilan dari girlband korea Red Velvet membawakan 3 lagu</td>
                                    </tr>
                                    <tr>
                                        <td>12.30</td>
                                        <td>Penutupan</td>
                                        <td>Penutupan oleh MC</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="text-center bg--dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-block">
                                <h2 class="type--uppercase">Follow for updates</h2>
                            </div>
                            <div class="instafeed" data-user-name="mediumrarethemes" data-amount="6" data-grid="6"></div>
                            <a class="btn btn--icon type--uppercase" href="#">
                                <span class="btn__text">
                                    <i class="socicon socicon-instagram"></i>
                                    Follow @agenx
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end of container-->
            </section>
            <footer class="footer-7 text-center-xs bg--dark  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="type--fine-print">&copy;
                                <span class="update-year"></span> Agen X &mdash; All Rights Reserved</span>
                        </div>
                        <div class="col-md-6 text-right text-center-xs">
                            <ul class="social-list list-inline">
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-google icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-twitter icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-facebook icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-instagram icon icon--xs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="/landing_assets/js/jquery-3.1.1.min.js"></script>
        <script src="/landing_assets/js/flickity.min.js"></script>
        <script src="/landing_assets/js/easypiechart.min.js"></script>
        <script src="/landing_assets/js/parallax.js"></script>
        <script src="/landing_assets/js/typed.min.js"></script>
        <script src="/landing_assets/js/datepicker.js"></script>
        <script src="/landing_assets/js/isotope.min.js"></script>
        <script src="/landing_assets/js/ytplayer.min.js"></script>
        <script src="/landing_assets/js/lightbox.min.js"></script>
        <script src="/landing_assets/js/granim.min.js"></script>
        <script src="/landing_assets/js/jquery.steps.min.js"></script>
        <script src="/landing_assets/js/countdown.min.js"></script>
        <script src="/landing_assets/js/twitterfetcher.min.js"></script>
        <script src="/landing_assets/js/spectragram.min.js"></script>
        <script src="/landing_assets/js/smooth-scroll.min.js"></script>
        <script src="/landing_assets/js/scripts.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
          $('#btn-pesan').click(function(e){
            e.preventDefault();
            Swal.fire({
              title: 'Pesan Tiket?',
              text: "Apakah anda yakin ingin memesan tiket ini?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, Pesan!'
            }).then((result) => {
              if (result.isConfirmed) {
                $('#form-pesan').submit();
              }
            })
          })
        </script>

        {{-- cek validate --}}
        @if ($errors->any())
        <script>
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "Isi data dengan benar!",
          })
        </script>
        @endif

        {{-- cek pesan --}}
        @if (session('message'))
        <script>
          Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ session('message') }}",
          })
        </script>
        @endif
    </body>
</html>