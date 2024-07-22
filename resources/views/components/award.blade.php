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
                    class="py-4 px-4 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <img src="{{ Storage::url($award->image) }}" alt="creative agency" style="max-height: 200px; object-fit: cover;">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Penghargaan Nasional</h3>
                    <p class="text-gray-500">Penghargaan Nasional 2024</p>
                </div><!-- end service block -->
            </div>
        @endforeach

    </div><!-- end row -->
</div>
