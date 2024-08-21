<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- Heading start -->
    <header class="text-center mx-auto mb-12 lg:px-20">
        <h2 class="text-2xl leading-normal mb-2 font-bold text-black"><span style="color: #45bd77;">Daftar Penghargaan</span> yang Telah Kami Dapatkan</h2>
        <p class="text-gray-800 leading-relaxed font-light text-xl mx-auto pb-2">Kami merasa terhormat dan bangga atas berbagai penghargaan yang telah kami terima sepanjang perjalanan kami.</p>
    </header><!-- End heading -->

    <!-- row -->
    <div class="flex flex-wrap flex-row -mx-4 text-center">
        @foreach ($awards as $award)
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                data-wow-duration="1s" data-wow-delay=".1s">
                <!-- service block -->
                <div
                    class="py-4 px-4 mb-12 transform transition duration-300 ease-in-out hover:-translate-y-2" style="border-radius: 8px;">
                    <div class="inline-block text-gray-900 mb-4">
                        <img src="{{ Storage::url($award->gambar) }}" alt="Penghargaan Batik Malang" 
                         style="min-height: 200px; max-height: 200px; object-fit: cover; border-radius: 8px;">
                    </div>
                    <h3 class="text-lg leading-normal mb-1 font-semibold text-black" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                        {{ $award->nama }}
                    </h3>
                    <h3 class="text-gray-800 text-base leading-normal mb-1" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                        {{ $award->tanggal }}
                    </h3>
                    <p class="text-gray-800" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">
                        {{ $award->deskripsi }}
                    </p>
                </div><!-- end service block -->
            </div>
        @endforeach
    </div><!-- end row -->
</div>
