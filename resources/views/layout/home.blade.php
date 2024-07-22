<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Batik Belimbing Malang</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo/logoBatiks.svg" />
    <link rel="stylesheet" href="{{ @asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ @asset('assets/css/home.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    {{-- <style>
        .owl-prev {
            width: 15px;
            height: 100px;
            position: absolute;
            top: 40%;
            margin-left: -20px;
            display: block !important;
            border: 0px solid black;
        }

        .owl-next {
            width: 15px;
            height: 100px;
            position: absolute;
            top: 40%;
            right: -25px;
            display: block !important;
            border: 0px solid black;
        }

        .owl-prev i,
        .owl-next i {
            transform: scale(1, 6);
            color: #ccc;
        }
    </style> --}}
    <style>
        .map-responsive {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }

        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        } 

        .card-title-product {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
        }
        .card-title-product i {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
            color: #ffa710;
        }
        .card-title-product i:hover {
            transform: scale(1.25) rotate(100deg);
            color: #18d4ca;
        }
        .card-text-product {
            height: 80px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css    ">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top z-100">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ @asset('assets/images/logo/logoBatiks.svg') }}"
                        width="50px" height="50px" alt=""></a>
                <button class="navbar-toggler button_nav_mobile" type="button">
                    <span class="navbar_overlay_icon bi"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sejarah">Sejarah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aktivitas">Aktivitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#penghargaan">Penghargaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kritik">Kritik Saran</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a href="/dashboard" class="btn btn-warning me-2">Login</a>
                    </form>

                </div>
            </div>
        </nav>
        <div class="navbar_overlay">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link nav_link_overlay">Company Profile</a></li>
                <li class="nav-item"><a class="nav-link nav_link_overlay">Sejarah</a></li>
                <li class="nav-item"><a class="nav-link nav_link_overlay">Aktivitas</a></li>
                <li class="nav-item"><a class="nav-link nav_link_overlay">Testimoni</a></li>
                <li class="nav-item"><a class="nav-link nav_link_overlay">Penghargaan</a></li>
                <li class="nav-item"><a class="nav-link nav_link_overlay">Produk</a></li>
                <li class="nav-item"><a class="nav-link nav_link_overlay">Kritik Saran</a></li>
            </ul>
        </div>
        <section class="hero" id="profile">
            <div class="container-fluid" data-aos="fade-down">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="">
                            <p class="text_hero mt-4">Company Profil
                                <span class="inline typing-text text-hero"></span>
                            </p>
                            <p class="text_content_hero">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Architecto libero odit, unde exercitationem esse deserunt iure numquam non quibusdam ad
                                iusto consequatur et vero vitae ratione? Sint reiciendis quia repudiandae!</p>
                            {{-- <a href="/login" class="btn btn_hero">Mulai Sekarang</a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center mt-3">
                        <iframe style="width: 640px; height: 360px; border-radius: 36px;" class="vid_hero"
                            src="https://www.youtube.com/embed/z44O1vFu-8M" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="sejarah" id="sejarah">
            <div class="container-fluid">
                <div class="row">
                    <div data-aos="zoom-in" class="col-md-6 d-flex align-items-center">
                        <div class="wrapper_img_fitur">
                            <img class="img_fitur" src="{{ @asset('../assets/images/content/company.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center" data-aos="zoom-in">
                        <div class="">
                            <p class="text_hero mt-4">Sejarah Batik Belimbing Malang
                                <span class="inline typing-text text-hero"></span>
                            </p>
                            <p class="text_content_hero">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Architecto libero odit, unde exercitationem esse deserunt iure numquam non quibusdam ad
                                iusto consequatur et vero vitae ratione? Sint reiciendis quia repudiandae!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="aktivitas mt-5 mb-5" id="aktivitas">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="aktivitas_main_header mt-3 mb-5 text-center">Aktivitas</div>
                    </div>
                </div>
                <div class="owl-carousel">
                    <div class="">
                        <div class="card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                            style="height: 500px; width: 100%;">
                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}" class="card-img-top"
                                style="height: 250px;" alt="Gambar Aktivitas">
                            <div class="card-body">
                                <h5 class="card-title">Tanam Pohon</h5>
                                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
                                    officiis cum dolores quam recusandae quidem, cumque labore numquam aliquam
                                    consequuntur nulla saepe corporis fugit odio autem maxime. Unde, praesentium.
                                    Ut!</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                            style="height: 500px; width: 100%;">
                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}" class="card-img-top"
                                style="height: 250px;" alt="Gambar Aktivitas">
                            <div class="card-body">
                                <h5 class="card-title">Tanam Pohon</h5>
                                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
                                    officiis cum dolores quam recusandae quidem, cumque labore numquam aliquam
                                    consequuntur nulla saepe corporis fugit odio autem maxime. Unde, praesentium.
                                    Ut!</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                            style="height: 500px; width: 100%;">
                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}" class="card-img-top"
                                style="height: 250px;" alt="Gambar Aktivitas">
                            <div class="card-body">
                                <h5 class="card-title">Tanam Pohon</h5>
                                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
                                    officiis cum dolores quam recusandae quidem, cumque labore numquam aliquam
                                    consequuntur nulla saepe corporis fugit odio autem maxime. Unde, praesentium.
                                    Ut!</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                            style="height: 500px; width: 100%;">
                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}" class="card-img-top"
                                style="height: 250px;" alt="Gambar Aktivitas">
                            <div class="card-body">
                                <h5 class="card-title">Tanam Pohon</h5>
                                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
                                    officiis cum dolores quam recusandae quidem, cumque labore numquam aliquam
                                    consequuntur nulla saepe corporis fugit odio autem maxime. Unde, praesentium.
                                    Ut!</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                            style="height: 500px; width: 100%;">
                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}" class="card-img-top"
                                style="height: 250px;" alt="Gambar Aktivitas">
                            <div class="card-body">
                                <h5 class="card-title">Tanam Pohon</h5>
                                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
                                    officiis cum dolores quam recusandae quidem, cumque labore numquam aliquam
                                    consequuntur nulla saepe corporis fugit odio autem maxime. Unde, praesentium.
                                    Ut!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </section>
    <section>
        <div class="aktivitas_main_header mt-3 mb-5 text-center">Produk</div>
        <div class="container-xl mt-2">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 col-sm-6 mr-4">
                    <div class="card card-block" style="width: 18rem; height: 25rem;">
                        <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" style="width: 100%; height: 50%; object-fit: cover;">
                        <h5 class="card-title-product mt-3 mb-3" style="padding: 10px;">Sierra Web Development • Owner</h5>
                        <p class="card-text-product" style="padding: 10px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">This is a company that builds websites, web apps and e-commerce solutions.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mr-4">
                    <div class="card card-block" style="width: 18rem; height: 25rem;">
                        <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset" style="width: 100%; height: 50%; object-fit: cover;">
                        <h5 class="card-title-product mt-3 mb-3" style="padding: 10px;">ProVyuh</h5>
                        <p class="card-text-product" style="padding: 10px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">This is a company that builds websites, web .</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mr-4">
                    <div class="card card-block" style="width: 18rem; height: 25rem;">
                        <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset" style="width: 100%; height: 50%; object-fit: cover;">
                        <h5 class="card-title-product mt-3 mb-3" style="padding: 10px;">ProVyuh</h5>
                        <p class="card-text-product" style="padding: 10px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">This is a company that builds websites, web apps and e-commerce solutions.</p>
                    </div>
                </div>
            </div>
        </div>
               
    </section>
    <section class="" id="testimoni">
        <div class="container-xl mt-2">
            <div class="row">
                <div class="col-sm-12">
                    <div class="aktivitas_main_header mt-3 mb-5 text-center">Testimoni</div>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}"
                                                class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem
                                                        scelerisque tempor, varius quam luctus dui. Mauris magna metus
                                                        nec.
                                                    </p>
                                                    <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}"
                                                class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque
                                                        eget
                                                        mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.
                                                    </p>
                                                    <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}"
                                                class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem
                                                        scelerisque tempor, varius quam luctus dui. Mauris magna metus
                                                        nec.
                                                    </p>
                                                    <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}"
                                                class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque
                                                        eget
                                                        mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.
                                                    </p>
                                                    <p class="overview"><b>Mary Saveley</b>, Web Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}"
                                                class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem
                                                        scelerisque tempor, varius quam luctus dui. Mauris magna metus
                                                        nec.
                                                    </p>
                                                    <p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <img src="{{ @asset('../assets/images/content/gambar4.jpeg') }}"
                                                class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque
                                                        eget
                                                        mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.
                                                    </p>
                                                    <p class="overview"><b>John Williams</b>, Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="zoom-in" class="contact mt-5 mb-5" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="aktivitas_main_header mt-3 mb-5 text-center">Hubungi Kami</div>
                <div class="col-md-6">
                    <h1 class="kontak_header">Hubungi Kami!</h1>
                    <p class="kontak_text">Jika ada kendala masalah login atau masalah lainnya, silahkan hubungi kami</p>
                    <div class="card">
                        <div class="card-body">
                            <form action="/hubungi-kami" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="nama" class="form-label m-1">Nama Anda</label>
                                    <input type="text" name="nama" id="nama" class="form-control bg-white">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="subjek" class="form-label m-1">Subjek Anda</label>
                                    <input type="text" name="subjek" id="subjek" class="form-control bg-white">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pesan" class="form-label m-1">Pesan Anda</label>
                                    <textarea type="text" name="pesan" id="pesan" class="form-control bg-white" style="height: 80px;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="kontak_header">Lokasi Kami</h1>
                    <p class="kontak_text">Temukan kami di lokasi berikut.</p>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5541113372287!2d112.63699114412204!3d-7.94154758583409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c1cc0bcb0b%3A0x6126b56d17e2ff96!2sJl.%20Candi%20Jago%20No.6%2C%20Blimbing%2C%20Kec.%20Blimbing%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065126!5e0!3m2!1sen!2sid!4v1721051642165!5m2!1sen!2sid"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer style="background-color: #FFA823" class="text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row my-4">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 150px; height: 150px;">
                        <img src="{{ @asset('assets/images/logos/logoBatiks.svg') }}" alt="">
                        height="70" alt="" loading="lazy" />
                    </div>

                    <p class="text-center">Homless animal shelter The budgetary unit of the Capital City of Warsaw
                    </p>

                    <ul class="list-unstyled d-flex flex-row justify-content-center">
                        <li>
                            <a class="text-white px-2" href="#!">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white px-2" href="#!">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white ps-2" href="#!">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Animals</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>When your pet is
                                missing</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Recently
                                found</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>How to adopt?</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pets for
                                adoption</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Material
                                gifts</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Help with
                                walks</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Volunteer
                                activities</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Animals</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>General
                                information</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>About the
                                shelter</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Statistic
                                data</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Job</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Tenders</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Contact</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p><i class="fas fa-map-marker-alt pe-2"></i>Warsaw, 57 Street, Poland</p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope pe-2 mb-0"></i>contact@example.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #FFD35A">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Batik Belimbing Malang</a>
        </div>
        <!-- Copyright -->
    </footer>

    {{-- </div> --}}
    <!-- End of .container -->
    <script>
        AOS.init({
            duration: 3000
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        let navbarOpen = false;
        $(".owl-carousel").owlCarousel({
            loop: false,
            margin: 20,

            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }

        });
        $(document).ready(function() {

            function checkScreenWidth() {
                if ($(window).width() >= 992) {
                    $('.navbar_overlay').removeClass('active');
                    $('.navbar_overlay_icon').removeClass('bi-x');
                    $('.navbar_overlay_icon').addClass('bi-list');
                }
            }
            checkScreenWidth();
            $(window).resize(function() {
                checkScreenWidth();
            });
        });
        $('.navbar_overlay_icon').addClass('bi-list');
        $('.navbar-toggler').on('click', function() {
            if (navbarOpen) {

                $('.navbar_overlay').removeClass('active');
                $('.navbar_overlay_icon').removeClass('bi-x');
                $('.navbar_overlay_icon').addClass('bi-list');
                navbarOpen = false;
            } else {
                $('.navbar_overlay').addClass('active');
                $('.navbar_overlay_icon').removeClass('bi-x');
                $('.navbar_overlay_icon').addClass('bi-x');
                navbarOpen = true;
            }
        });
    </script>
    <script>
        $(document).ready(function() {

            var owl = $("#owl-demo1");

            owl.owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                autoplay: false,
                dots: false,
                items: 3, //10 items above 1000px browser width
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 2,
                        nav: false,
                    },
                    1000: {
                        items: 4,
                        nav: false,
                        loop: false,
                    }
                }
            })

        });
    </script>
    <script src="{{ @asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ @asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ @asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ @asset('assets/js/app.min.js') }}"></script>
    <script src="{{ @asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ @asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ @asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
