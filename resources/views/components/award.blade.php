<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- Heading start -->
    <header class="text-center mx-auto mb-12 lg:px-20">
        <h2 class="text-2xl leading-normal mb-2 font-bold text-black">Penghargaan</h2>
        <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Penghargaan yang pernah kami dapatkan.</p>
    </header><!-- End heading -->

    <!-- row -->
    <div class="flex flex-wrap flex-row -mx-4 text-center">
        @foreach ($awards as $award)
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                data-wow-duration="1s" data-wow-delay=".1s">
                <!-- service block -->
                <div
                    class="py-4 px-4 mb-12 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <img src="{{ Storage::url($award->gambar) }}" alt="Penghargaan Batik Malang" style="min-height: 200px; max-height: 200px; object-fit: cover;">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                        {{ $award->nama }}
                    </h3>
                    <p class="text-gray-500" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">
                        {{ $award->deskripsi }}
                    </p>
                </div><!-- end service block -->
            </div>
        @endforeach

    </div><!-- end row -->
</div>
