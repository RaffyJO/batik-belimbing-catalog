<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- section header -->
    <header class="text-center mx-auto mb-12">
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
                        <img src="{{ Storage::url($product->image) }}"
                            class="max-w-full h-auto mx-auto rounded-full bg-gray-50" alt="title image">
                    </div>
                    <div class="pt-6 text-center">
                        <p class="text-lg leading-normal font-bold mb-1">Batik Jawa</p>
                        <p class="text-gray-500 leading-relaxed font-light">Perpaduan Batik Jawa dengan desain yang modern</p>
                    </div>
                </div><!-- end team block -->
            </div>
        @endforeach
    </div><!-- end row -->
</div>
