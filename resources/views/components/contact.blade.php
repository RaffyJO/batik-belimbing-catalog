<div class="container xl:max-w-6xl mx-auto px-4 pt-8">
    <!-- Heading start -->
    <header class="text-center mx-auto mb-8 lg:px-20">
        <h2 class="text-2xl leading-normal mb-2 font-bold text-black">@lang('landing-page.location.title')</h2>
    </header><!-- End heading -->
</div>

<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- Map Section -->
    <div class="flex justify-center">
        <div class="relative overflow-hidden rounded-lg shadow-lg" style="width: 100%; height: 0; padding-bottom: 56.25%;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5549058938204!2d112.64054499999999!3d-7.941465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c1ccf4c6bf%3A0x5e0f9815ca840689!2sBatik%20Blimbing%20Malang!5e0!3m2!1sen!2sid!4v1721583692226!5m2!1sen!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;">
            </iframe>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="flex flex-wrap mt-12 flex-row -mx-4 justify-center">
        <div class="max-w-full px-4 w-full lg:w-10/12">
            <div class="bg-white w-full p-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-4 lg:px-20">
                    <img class="mx-auto mb-4" src="{{ @asset('assets/images/logo/logoBatiks.svg') }}" width="60px" height="60px" alt="">
                    <h2 class="text-2xl leading-normal mb-4 font-bold text-gray-800 dark:text-gray-100">
                        <span class="font-semibold">@lang('landing-page.contact.title')</span>
                    </h2>
                    <p class="text-gray-900 leading-relaxed font-light text-base mx-auto pb-2 lg:w-8/12">@lang('landing-page.contact.description')</p>
                </header><!-- end section header -->

                <div class="text-center mb-2">
                    <a target="_blank" class="py-2.5 px-10 inline-block text-center leading-normal font-medium text-black bg-green-300 border border-green-300 hover:text-black hover:ring-0 focus:outline-none focus:ring-0"
                        href="https://wa.me/6281334585892?text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20Batik%20Blimbing%20Malang." style="border-radius: 8px;">
                        @lang('landing-page.order')
                    </a>
                </div>                              
            </div>
        </div>
    </div>
</div>
