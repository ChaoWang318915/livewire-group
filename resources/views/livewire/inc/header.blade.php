<div x-data="{ navShow : false, isBtnClick : false}" x-init="$watch('navShow', () => {
    document.body.style.overflowY = navShow ? 'hidden' : 'visible';
})">
    <nav class="flex items-center justify-between main-nav container py-7">
                <a href="#">
                  <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo" class="logo" />
                </a>
                <ul class="hidden md:flex items-center nav-link-wrapper">
                    <li>
                        <a href="#" class="nav-link">Why Flock</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Features</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Learn More</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="nav-link nav-auth-btn">Sign In</a>
                    </li>
                </ul>

                <div class="flex items-center space-x-5 md:hidden">
                    <a href="{{ route('login') }}" class="nav-link nav-auth-btn text-xs">Sign In</a>

                    <button class="text-3xl text-white" x-on:click="navShow = !navShow; isBtnClick = true; ">
                        <i class="las la-align-justify"></i>
                    </button>
                </div>

    </nav>
    @include("livewire.inc.inc.mobile-nav")
</div>
