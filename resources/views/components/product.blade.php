<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- section header -->
    <header class="text-center mx-auto mb-12">
        <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100">@lang('landing-page.product.title')</h2>
        <p class="text-gray-800 leading-relaxed font-light text-xl mx-auto pb-2">@lang('landing-page.product.description')</p>
    </header><!-- end section header -->
   
    <!-- row -->
    <div class="flex flex-wrap flex-row -mx-4 justify-center">
        @foreach ($products as $product)  
            <div class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6">
                <div class="relative overflow-hidden bg-white dark:bg-gray-800 mb-12"
                    data-wow-duration="1s">
                    <!-- team block -->
                    <div class="relative overflow-hidden px-6">
                        <img src="{{ Storage::url($product->gambar) }}" alt="Batik Malang" style="min-height: 250px; max-height: 250px; object-fit: cover;"
                            class="max-w-full h-auto mx-auto rounded-full bg-gray-50" alt="title image">
                    </div>
                    <div class="pt-6 text-center">
                        <p class="text-lg leading-normal font-bold mb-1" 
                            style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                            {{ $product->nama }}
                        </p>
                        <p class="text-gray-800 leading-relaxed font-light" 
                            style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">
                            {{ $product->deskripsi }}
                        </p>
                    </div>
                </div><!-- end team block -->
            </div>
        @endforeach
    </div><!-- end row -->

    <div class="text-center mx-auto mb-12">
        <h3 class="text-lg leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100">
            <a href="{{ route('products') }}">-- @lang('landing-page.product.more') --</a>
        </h3>
    </div>
</div>
