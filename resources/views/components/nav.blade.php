<nav class="main-nav">
    <div class="container xl:max-w-6xl mx-auto px-4">
        <div class="lg:flex lg:justify-between">
            <div class="flex justify-between">
                <div class="mx-w-10 text-4xl font-bold capitalize text-gray-900 flex items-center">
                    <a class="navbar-brand" href="#"><img src="{{ @asset('assets/images/logo/logoBatiks.svg') }}"
                        width="60px" height="60px" alt=""></a>
                </div>
                <!-- mobile nav -->
                <div class="flex flex-row items-center py-4 lg:py-0">
                    <div class="relative text-gray-900 hover:text-black block lg:hidden">
                        <button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent">
                            <span class="sr-only">Mobile menu</span>
                            <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="close bi bi-x-lg h-8 w-8" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                <path fill-rule="evenodd"
                                    d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-row">
                <!-- nav menu -->
                <ul
                    class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row text-gray-900 text-sm items-center font-bold">
                    <li class="relative hover:text-black">
                        <a class="active block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#profile">@lang('landing-page.nav.profile')</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#kegiatan">@lang('landing-page.nav.activity')</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#penghargaan">@lang('landing-page.nav.award')</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#produk">@lang('landing-page.nav.product')</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#testimoni">@lang('landing-page.nav.testimony')</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#hubungi">@lang('landing-page.nav.contact')</a>
                    </li>
                    <li class="relative hover:text-black py-3 lg:py-7 px-3">
                        <div class="language-switch">
                            <input type="radio" id="lang-id" name="translate" value="{{ route('locale', ['locale' => 'id']) }}" {{ app()->getLocale() == 'id' ? 'checked' : '' }} />
                            <label for="lang-id">Indonesia</label>
                            <input type="radio" id="lang-en" name="translate" value="{{ route('locale', ['locale' => 'en']) }}" {{ app()->getLocale() == 'en' ? 'checked' : '' }} />
                            <label for="lang-en">English</label>
                            <span class="switch"></span>
                        </div>
                    </li>                  
                </ul>
            </div>
        </div>
    </div>
</nav>

<style>
    .language-switch {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    }

    .language-switch input[type="radio"] {
        display: none;
    }

    .language-switch label {
        padding: 10px;
        cursor: pointer;
        border: solid 1.5px black;
        border-radius: 50px;
        background-color: transparent;
        transition: background-color 0.3s ease;
    }

    .language-switch input[type="radio"]:checked + label {
        background-color: black;
        color: white;
    }

    .language-switch .switch {
        position: absolute;
        left: 0;
        top: 0;
        width: 50%;
        height: 100%;
        background-color: black;
        border-radius: 50px;
        transition: transform 0.3s ease;
        z-index: -1;
    }

    #lang-id:checked ~ .switch {
        transform: translateX(0%);
    }

    #lang-en:checked ~ .switch {
        transform: translateX(100%);
    }
</style>

<script>
    document.querySelectorAll('input[name="translate"]').forEach((elem) => {
        elem.addEventListener('change', function() {
            window.location.href = this.value;
        });
    });
</script>