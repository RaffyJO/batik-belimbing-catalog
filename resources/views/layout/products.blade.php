<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Batik Belimbing Malang - Produk</title>
    <meta name="description" content="Batik Belimbing Malang">

    <!-- Development css -->
    <link rel="stylesheet" href="src/css/style.css">

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
    <div class="section relative pt-4 pb-8 md:pt-16 bg-white dark:bg-gray-800">
        <div class="container xl:max-w-6xl mx-auto px-4">
            <!-- section header -->
            <header class="text-center mx-auto mb-12">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-center">
                    <div class="flex items-center group">
                        <a href="{{ route('landing-page') }}"
                            class="text-blue-main hover:text-blue-main mr-2 group-hover:text-dodger-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5M12 5l-7 7 7 7" />
                            </svg>
                        </a>
                        <a href="{{ route('landing-page') }}">
                            <span
                                class="text-blue-main text-base font-medium hover:text-dodger-blue-800 group-hover:text-dodger-blue-800">Kembali</span>
                        </a>
                    </div>
                </div>
                <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100">Produk Kami</h2>
                <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Kami menawarkan produk yang berkualitas tinggi dengan desain khas Malang. Menggabungkan keindahan motif tradisional dengan sentuhan modern.</p>
            </header><!-- end section header -->
        
            <!-- row -->
            <div class="flex flex-wrap flex-row -mx-4 justify-center">
                @foreach ($products as $product)  
                    <div class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6">
                        <div class="relative overflow-hidden bg-white dark:bg-gray-800 mb-12"
                            data-wow-duration="1s">
                            <!-- team block -->
                            <div class="relative overflow-hidden px-6">
                                <img src="{{ Storage::url($product->gambar) }}" alt="Batik Malang" loading="lazy" style="min-height: 250px; max-height: 250px; object-fit: cover;"
                                    class="max-w-full h-auto mx-auto rounded-full bg-gray-50" alt="title image">
                            </div>
                            <div class="pt-6 text-center">
                                <p class="text-lg leading-normal font-bold mb-1" 
                                    style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                                    {{ $product->nama }}
                                </p>
                                <p class="text-gray-500 leading-relaxed font-light" 
                                    style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4;">
                                    {{ $product->deskripsi }}
                                </p>
                            </div>
                        </div><!-- end team block -->
                    </div>
                @endforeach
            </div><!-- end row -->
        </div>        
    </div>

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

    <!-- Start development js -->
    <script src="src/js/theme.js"></script>
    <!-- End development js -->

    <!-- Production js -->
    <!-- <script src="dist/js/scripts.js"></script> -->
</body>
</html>