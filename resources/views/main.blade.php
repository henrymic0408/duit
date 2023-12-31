<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Home - Aplikasi Sistem Manajemen Keuangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Precedence Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('template/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{asset('template/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="{{asset('teamplate/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!--//webfonts-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <section class="main-header">
            <div class="header-top text-md-left text-center">
                <div class="container">
                    <div class="d-md-flex justify-content-between">
                        <p class="text-capitalize">if you have any question? Call Us +62812 9697 7703 </p>
                        <ul class="social-iconsv2 agileinfo mt-md-0 mt-2">
                            <li class="ml-lg-5">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /header-top-->
            <header class="main-header">
                <nav class="navbar second navbar-expand-lg navbar-light bg-light pagescrollfix">
                    <div class="container">
                        <h1>
                            <a class="navbar-brand" href="#">
                                Aplikasi Sistem
                                <span> - Manajemen Keuangan</span>
                            </a>
                        </h1>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup1"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse navbar-toggle" id="navbarNavAltMarkup1">
                            <div class="navbar-nav secondfix ml-lg-auto">
                                <ul class="navbar-nav text-center">
                                    <li class="nav-item active  mr-3">
                                        <a class="nav-link scroll" href="#home">Home
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  mr-3">
                                        <a class="nav-link scroll" href="#about">about</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="#services">Feature</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="#contact">contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </section>
        <!-- //header -->
        <!-- banner -->
        <div class="banner">
            <div class="container">
                <div class="banner-text-agile">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Carousel -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4">
                                            <span>Multi Cash</span> Books</h3>
                                        <p class="mt-2">Seluruh pemasukan dan pengeluaran dapat dicatat secara mudah, cepat, dan praktis hanya dalam beberapa klik.</p>
                                        <a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">LEARN MORE</a>
                                    </div>
                                    <!-- slider text -->
                                    <div class="carousel-item">
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4">
                                            <span>Multi </span>Users</h3>
                                        <p class="mt-2">Pengguna tambahan bisa Anda buat dengan hak aksesnya masing-masing.</p>
                                        <a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">LEARN MORE</a>
                                    </div>
                                    <!-- slider text -->
                                    <div class="carousel-item text-white">
                                        <h3 class="b-w3ltxt  text-capitalize mt-md-4">
                                            <span>Laporan</span> & Grafik</h3>
                                        <p class="mt-2">Laporan Kas Harian, dan Tahunan tersedia lengkap. Terdapat Fitur Grafik</p>
                                        <a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">LEARN MORE</a>
                                    </div>
                                    <!-- slider text -->
                                </div>
                            </div>
                            <!-- Carousel -->
                        </div>
                        <div class="offset-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->
        <!-- banner bottom -->
        <div class="serv_bottom py-sm-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h4 class="agile-ser_bot text-light text-capitalize">Buku Kas Online Praktis!</h4>
                        <p class="text-secondary">Aplikasi pembukuan keuangan yang bisa digunakan untuk apa saja dan siapa saja.</p>
                    </div>
                    <div class="col-lg-4 my-lg-auto mt-3 text-lg-right">
                        <a href="#services" class="text-capitalize serv_link btn scroll">view more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner-bottom -->
        <!-- about-->
        <section class="wthree-row py-sm-5" id="about">
            <div class="container py-md-5">
                <div class="row abbot-main py-lg-5 py-4">
                    <div class="col-lg-6 abbot-right">
                        <span></span>
                        <img src="{{asset('template/images/slide.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 about-text-grid">
                        <h3 class="stat-title">about us
                        </h3>
                        {{-- {!! $about->keterangan !!} --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- //about -->
        <!-- services -->
        <section class="services-w3sec py-5" id="services">
            <div class="container">
                <div class="agileabt-w3 py-lg-5">
                    <div class="w3l-head text-center  pb-5">
                        <h3 class="stat-title">Fitur-Fitur Utama
                        </h3>
                        <p class="sec-title text-capitalize">
                        Fungsi utama aplikasi keuangan ini adalah untuk mencatat pengeluaran (kredit) dan pemasukan (debet), riwayat saldo, dan laporan yang menyertainya. </p>
                    </div>
                    <div class="row py-lg-5">
                        <!-- Table #1  -->
                        @foreach($services as $index=>$sv)
                            @if($index == 0)
                                <div class="col-lg-4">
                                    <div class="w3ls-pricing card">
                                        <div class="card-header">
                                            <h4 class="serv-title">
                                                {{$sv->judul}}
                                            </h4>
                                        </div>
                                        <div class="card-block">
                                            <p class="card-title price-title">
                                                {!! $sv->keterangan !!}
                                            </p>
                                        </div>
                                        <i class="service-icon fas fa-database">
                                        </i>
                                    </div>
                                </div>
                            @elseif($index == 1)
                                <div class="col-lg-4 my-lg-0 my-5">
                                    <div class="w3ls-pricing card service-active">
                                        <div class="card-header">
                                            <h4 class="serv-title">
                                                {{$sv->judul}}
                                            </h4>
                                        </div>
                                        <div class="card-block">
                                            <p class="card-title price-title">
                                                {!! $sv->keterangan !!}
                                            </p>
                                        </div>
                                        <i class="service-icon far fa-lightbulb">
                                        </i>
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-4 mb-lg-0 mb-5">
                                    <div class="w3ls-pricing card">
                                        <div class="card-header">
                                            <h4 class="serv-title">
                                                {{$sv->judul}}
                                            </h4>
                                        </div>
                                        <div class="card-block">
                                            <p class="card-title price-title">
                                                {!! $sv->keterangan !!}
                                            </p>
                                        </div>
                                        <i class="service-icon fas fa-bullhorn">
                                        </i>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        
                        <!-- Table #1  -->
                        
                        <!-- Table #1  -->
                        
                    </div>
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </section>
        <!-- //services -->
        <!-- sub services -->
        <section class="py-md-5" id="sub-services">
            <div class="container">
                <div class="agileabt-w3">
                    <div class="row py-5">
                        <div class="col-md-12">
                            <h2 style="text-align: center;">Harga Aplikasi Keuangan ASMK</h2>
                            <br><br>
                        </div>
                        <div class="col-md-12">
                            <p style="text-align: center;">Aplikasi pembukuan keuangan ASMK menyediakan dua tipe layanan, yaitu Gratis (Free) dan Berbayar (Premium). Anda bebas untuk memilih antara dua tipe layanan ini. Saat pertama
                                kali mendaftar, Anda akan otomatis menjadi pengguna Free. Anda bisa meningkatkannya menjadi Premium jika membutuhkan fasilitas yang lebih lengkap. Di bawah ini adalah
                                beberapa perbedaan utama antara versi gratis dengan Premium.
                                <br><br>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h2 style="text-align: center;">Gratis atau Berbayar? Terserah Anda!</h2>
                            <br><br>
                        </div>
                        <div class="col-md-7">
                            <br><br>
                            <p>Jika Anda berminat untuk meningkatkan layanan menjadi Premium, kami menyediakan beberapa metode untuk mempermudah Anda saat melakukan pembayaran. </p>
                            <br/>
                            <p>Harga setiap metode berbeda-beda tergantung berapa besar komisi yang harus kita bayar kepada penyedia layanan. Kami membebaskan Anda untuk memilih
                                metode pembayaran yang sekiranya paling pas atau paling murah untuk Anda.
                            </p>
                            </div>
                        <div class="col-lg-4 grad_video my-lg-auto mt-5">
                            <img src="{{asset('template/images/tabel-01.jpg')}}" class="img-fluid" alt="" />
                        </div>
                        <br/>
                        <div class="col-lg-4 grad_video my-lg-auto mt-5">
                            <img src="{{asset('template/images/tabel2-01.jpg')}}" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-7">
                            <br>
                            <br>
                            <br>
                            <br>
                            <p>Di samping adalah tabel biaya langganan Premium khusus untuk wilayah Indonesia. Harga bisa berbeda di negara lain tergantung kurs mata uang dan pajak yang dikenakan di masing-masing negara. </p>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //sub services -->
        <!-- testimonials-->
        <div class="testimonials" id="testi">
            <div class="container">
                <div class="banner-text text-center">
                    <h3 class="stat-title">Testimoni
                    </h3>
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            @foreach($testimoni as $tt)
                            <li>
                                <div class="testi-agile">
                                    {!! $tt->keterangan !!}
                                    <div class="testi-pos">
                                        <img src="{{asset('template/images/ts1.jpg')}}" alt="" class="img-fluid rounded-circle" />
                                        <h4>{{ $tt->nama }}</h4>
                                        <span>{{ $tt->perusahaan }}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //testimonials -->
        <!-- branches -->

        <!-- //branches -->
        <!-- contact top -->
        
        <!-- //contact top -->
        <!-- blog -->
        <section class="section-events py-5" id="blog">
            <div class="container py-md-5">
                <h3 class="stat-title text-center pb-sm-5">our articles
                </h3>
                @foreach($artikel as $at)
                <div class="sub-sec-grid position-relative my-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#">
                                <!-- <img class="card-img-bottom" src="images/g2.jpg" alt="Card image cap"> -->
                            </a>
                        </div>
                        <div class="col-lg-8 date-grid-agile-right">
                            <div class="card-body">
                                <h5 class="blog-title card-title font-weight-bold">
                                    {{ $at->judul }}
                                </h5>
                                <p class="card-text  mb-5">{!! $at->isi !!}</p>
                                <div class="text-right">
                                    <!-- <a href="#" class="price_link btn">Read more</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="pos-date">
                            <div class="pos-date__inner">
                                <h2 class="pos-date__title">12</h2>
                                <p class="pos-date__subtitle">Januari</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- //blog -->
        <!-- contact -->
        <div class="w3-contact py-5" id="contact">
            <div class="container py-lg-5">
                <h3 class="stat-title text-center pb-5">contact us
                </h3>
                <div class="row contact-form pt-lg-5">
                    <!-- contact details -->
                    <div class="col-lg-6 contact-bottom d-flex flex-column contact-right-w3ls">
                        <h5>get in touch</h5>
                        <div class="fv3-contact">
                            <div class="row">
                                <div class="col-2">
                                    <span class="fas fa-envelope-open"></span>
                                </div>
                                <div class="col-10 contact-add">
                                    <h6>email</h6>
                                    <p>
                                        <a href="mailto:example@email.com" class="text-dark">manajemen_keuangan@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="fv3-contact my-4">
                            <div class="row">
                                <div class="col-2">
                                    <span class="fas fa-phone-volume"></span>
                                </div>
                                <div class="col-10 contact-add">
                                    <h6>phone</h6>
                                    <p>+62812 9697 7703</p>
                                </div>
                            </div>
                        </div>
                        <div class="fv3-contact">
                            <div class="row">
                                <div class="col-2">
                                    <span class="fas fa-home"></span>
                                </div>
                                <div class="col-10 contact-add">
                                    <h6>address</h6>
                                    <p>Bandung, Jawa Barat, INA.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wthree-form-left my-lg-0 mt-5">
                        <h5>send us a mail</h5>
                        <!-- contact form grid -->
                        <div class="contact-top1">
                            <form action="{{ url('contact-us') }}" method="POST" class="contact-wthree">
                                {{ csrf_field() }}
                                <div class="form-group d-flex">
                                    <label>
                                        Name
                                    </label>
                                    <input class="form-control" type="text" placeholder="Banni" name="nama" required="">
                                </div>
                                <div class="form-group d-flex">
                                    <label>
                                        Email
                                    </label>
                                    <input class="form-control" type="email" placeholder="example@email.com" name="email" required="">
                                </div>
                                <div class="form-group d-flex">
                                    <label>
                                        Phone
                                    </label>
                                    <input class="form-control" type="text" placeholder="XXXX XXXX XX" name="nope" required="">
                                </div>
                                <div class="form-group d-flex">
                                    <label>
                                        Message
                                    </label>
                                    <textarea class="form-control" name="keterangan" rows="5" id="contactcomment" placeholder="Your message" required></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-agile btn-block w-25">Send</button>
                                </div>
                            </form>
                        </div>
                        <!--  //contact form grid ends here -->
                    </div>

                </div>
                <!-- //contact details container -->
            </div>
        </div>
        <!-- //contact -->
        <!-- Footer -->
        <footer id="footer" class="py-5">
            <div class="container">
                <div class="row  py-lg-5">
                    <div class="col-lg-3 col-sm-6 footer-logo">
                        <h5>about us</h5>
                        <h2>
                            <a href="index.html">
                                Aplikasi Sistem
                                <span> - Manajemen Keuangan</span>
                            </a>
                        </h2>
                        <p class="mt-3">Trimakasih Sudah Menggunakan Aplikasi Kami</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-double-right"></i>Home</a>
                            </li>
                            <li>
                                <a href="#about" class="scroll">
                                    <i class="fa fa-angle-double-right"></i>About</a>
                            </li>
                            <li>
                                <a href="#services" class="scroll">
                                    <i class="fa fa-angle-double-right"></i>Feature</a>
                            </li>
                            <li>
                                <a href="#blog" class="scroll">
                                    <i class="fa fa-angle-double-right"></i>Articles</a>
                            </li>
                            <li>
                                <a href="#contact" class="scroll">
                                    <i class="fa fa-angle-double-right"></i>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer_grid1 mt-lg-0 mt-4">
                        <h5>Address</h5>
                        <div class="fv3-contact">
                            {{-- {!! $alamat->alamat !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="cpy-right text-center py-4">
            <p>© 2018 Precedence. All rights reserved | Design by
                <a href="http://manajemenkeuangan.com"> Kelompok4.</a>
            </p>
        </div>
    </div>
    <!-- /Footer -->
    <!-- js-->
    <script src="{{asset('template/js/jquery-2.2.3.min.js')}}"></script>
    <!-- js-->
    <!-- Scrolling Nav JavaScript -->
    <script src="{{asset('template/js/scrolling-nav.js')}}"></script>
    <!-- //fixed-scroll-nav-js -->
    <script>
        $(window).scroll(function () {
            if ($(document).scrollTop() > 70) {
                $('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
            } else {
                $('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
            }
        });
    </script>
    <!-- Banner text Responsiveslides -->
    <script src="{{asset('template/js/responsiveslides.min.js')}}"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner text  Responsiveslides -->
    <!-- start-smooth-scrolling -->
    <script src="{{asset('template/js/move-top.js')}}"></script>
    <script src="{{asset('template/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
             var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
             };
             */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{asset('template/js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('template/js/bootstrap.js')}}">
    </script>
    <!-- //Bootstrap Core JavaScript -->
    <script type="text/javascript">
        $(document).ready(function(){
            var flash = "{{ Session::has('pesan') }}";
            if(flash){
                var pesan = "{{ Session::get('psan') }}";
                alert(pesan);
            }
        });
    </script>
</body>

</html>