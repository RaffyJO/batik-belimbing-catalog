<div class="container xl:max-w-6xl mx-auto px-4">
    <div class="flex flex-wrap flex-row -mx-4">
        <!-- content -->
        <div class="flex-shrink max-w-full px-4 sm:px-12 lg:px-18 w-full sm:w-9/12 lg:w-1/2 self-center">
            <iframe style="width: 100%; height: 360px; border-radius: 24px;" class="vid_hero"
                src="https://www.youtube.com/embed/z44O1vFu-8M" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

        <!-- text -->
        <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
            <div class="text-center lg:text-left mt-6 lg:mt-0">
                <div class="mb-12">
                    <h1 class="text-4xl leading-normal text-black font-bold mb-4">
                        @lang('landing-page.title')
                    </h1>
                    <p class="text-gray-800 leading-relaxed font-light text-xl mx-auto pb-2">
                        @lang('landing-page.description')
                    </p>
                </div>
            </div>
        </div>
    </div>

   <!-- Sejarah Section -->
    <section class="sejarah" id="sejarah">
        <div class="container-fluid mt-12 px-4">
            <div class="flex flex-wrap flex-row -mx-4">
                <div class="flex-shrink max-w-full mb-4 px-4 w-full md:w-6/12 self-center" data-aos="zoom-in">
                    <div class="mt-6 lg:mt-0">
                        <p class="text-4xl text-black font-bold mb-4">
                            @lang('landing-page.history.title')
                        </p>
                        <p class="text-gray-800 leading-relaxed font-light text-xl">
                            @lang('landing-page.history.description')
                        </p>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full md:w-6/12 self-center" data-aos="zoom-in">
                    <div class="wrapper_img_fitur">
                        <img class="img_fitur w-full" src="{{ asset('assets/images/content/sejarah.jpg') }}" alt="Sejarah Batik Belimbing Malang" style="max-height: 400px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
