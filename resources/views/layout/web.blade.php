<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Batik Belimbing Malang</title>
    <meta name="description" content="Batik Belimbing Malang">

    <!-- Development css -->
    <link rel="stylesheet" href="src/css/style.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"> --}}

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo/logoBatiks.svg" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- Favicon  -->
    <link rel="icon" href="src/img/favicon.jpg">
</head>

<body class="text-gray-700">

    <!-- ========== { HEADER }==========  -->
    <header class="fixed top-0 left-0 right-0 z-40">
        @include('components.nav')
    </header><!-- end header -->

    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- hero start -->
        <div id="profile" class="section relative z-0 py-16 md:pt-32 md:pb-20 bg-gray-50">
            @include('components.profile')
        </div>
        <!-- end Hero -->

        <!-- Portfolio Content -->
        <div id="kegiatan" class="section relative z-0 py-12 md:py-16 bg-white">
            @include('components.activity')
        </div><!--  End Content -->

        <!-- start services -->
        <div id="penghargaan" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            @include('components.award')
        </div><!-- End Service -->

        <!-- Team start -->
        <div id="produk" class="section relative pt-20 pb-8 md:pt-16 bg-white dark:bg-gray-800">
            @include('components.product')
        </div>
        <!-- End Team-->

        <!-- start clients -->
        <div id="testimoni" class="section relative py-8 bg-white dark:bg-gray-800">
            @include('components.testimony')
        </div><!-- End brand-->

        <!-- contact start -->
        <div id="hubungi" class="section relative pb-20 bg-white dark:bg-gray-800">
            @include('components.contact')
        </div><!-- End contact -->
    </main><!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    <footer class="bg-gray-50 text-gray-700">
        @include('components.footer')
    </footer><!-- end footer -->

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#"
        class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden"
        aria-label="Scroll To Top">
        <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd">
            </path>
            <path fill-rule="evenodd"
                d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <!--Vendor js-->
    <script src="src/vendors/glightbox/dist/js/glightbox.min.js"></script>
    <script src="src/vendors/@splidejs/splide/dist/js/splide.min.js"></script>
    <script src="src/vendors/typed.js/lib/typed.min.js"></script>
    <script src="src/vendors/wow.js/dist/wow.min.js"></script>
    <script src="src/vendors/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <!-- Start development js -->
    <script src="src/js/theme.js"></script>
    <!-- End development js -->

    <!-- Production js -->
    <!-- <script src="dist/js/scripts.js"></script> -->
</body>

</html>
