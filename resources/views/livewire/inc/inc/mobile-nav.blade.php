<main 
x-cloak
class="main-mobile-nav z-50 md:hidden bg-dark bg-opacity-50 transition-all h-screen overflow-hidden fixed top-0 right-0 flex justify-end" 
:class="navShow ? 'w-screen' : 'w-0'">
	<section class="w-2/3 bg-white rounded-l-2xl p-5 py-7" x-on:click.outside="navShow = isBtnClick == true ? true : false;isBtnClick = false">
        <section class="flex space-x-5">
            <section class="flex-1">
                <header class="border-b border-light pb-5">
                    <a href="#">
                      <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo" class="logo" />
                    </a>
                </header>

                <ul class="space-y-1">
                    <li>
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Download</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Nitro</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Discover</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Support</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Careers</a>
                    </li>
                </ul>
            </section>
            <section>
                 <button class="text-2xl" x-on:click="navShow = !navShow">
                        <i class="las la-times"></i>
                 </button>
            </section>
        </section>
    </section>
</main>