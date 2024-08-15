<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- Heading start -->
    <header class="text-center mx-auto mb-12 lg:px-20">
        <h2 class="text-2xl leading-normal mb-2 font-bold text-black">Kegiatan Kami</h2>
        <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Kegiatan yang pernah kami kerjakan.</p>
    </header><!-- End heading -->
</div>

<div class="container xl:max-w-2xl mx-auto px-4 flex flex-wrap flex-row">
    @foreach ($activities as $activity)
        <figure class="flex-shrink max-w-full px-3 w-full sm:w-1/2 lg:w-1/4 group wow fadeInUp" data-wow-duration="1s">
            <div class="relative overflow-hidden cursor-pointer mb-6">
                <a href="{{ Storage::url($activity->gambar) }}" alt="Kegiatan Batik Malang" data-gallery="gallery1"
                    data-glightbox="title: {{ $activity->nama }} ; description: {{ $activity->lokasi }}, {{ $activity->tanggal }} - {{ $activity->deskripsi }}"
                    class="glightbox3">
                    <img class="block w-full h-auto transform duration-500 grayscale hover:scale-125"
                        style="min-height: 200px; max-height: 200px; object-fit: cover;"
                        src="{{ Storage::url($activity->gambar) }}" alt="Image Description">
                    <div
                        class="absolute inset-x-0 bottom-0 h-25 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-black text-left">
                        <h3 class="text-base leading-normal font-semibold my-1 text-white" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                            {{ $activity->nama }}
                        </h3>
                        <small class="d-block" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                            {{ $activity->deskripsi }}
                        </small>
                        <small class="d-block" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                          {{ $activity->lokasi }}, {{ $activity->tanggal }}
                        </small>
                    </div>
                </a>
            </div>
        </figure>
    @endforeach
</div>
