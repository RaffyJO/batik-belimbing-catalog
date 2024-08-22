<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- Heading start -->
    <header class="text-center mx-auto mb-12 lg:px-20">
        <h2 class="text-xl leading-normal mb-2 font-bold text-black">
            Telah Dipercaya oleh Ribuan Pelanggan di Berbagai Daerah
        </h2>
    </header><!-- End heading -->
</div>


<div class="container xl:max-w-6xl mx-auto px-4 pb-2">
    <div class="lex flex-wrap flex-row -mx-4 justify-center">
        <div class="w-full px-4">
            <!-- slider client -->
            <div id="post-carousel" class="navslider-hover splide post-carousel">
                <div class="splide__track">
                    <div class="splide__list grayscale">
                        @foreach ($testimonies as $testimony)
                            <div class="splide__slide">
                                <div class="w-full px-4 text-left pb-3">
                                    <h3 class="text-lg leading-normal font-bold mb-1 text-black">{{ $testimony->nama }}</h3>
                                    <h1 class="text-gray-800 leading-relaxed font-light" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">
                                        {{ $testimony->deskripsi }}
                                    </h1>
                                    {{-- <a href="#" target="_blank">
                                        <img class="grayscale mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                            src="{{ Storage::url($testimony->image) }}" alt="{{ $testimony->name }}">
                                    </a> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!-- end slider client -->
        </div>
    </div>
</div>
