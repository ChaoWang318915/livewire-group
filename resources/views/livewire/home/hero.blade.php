<section class="hero-section bg-dark">
        @livewire("inc.header")

        <section class="relative">
            <section class="px-5 relative z-20 text-center space-y-8 text-white min-h-[70vh] flex flex-col h-full items-center justify-center">
                <section class="space-y-2">
                    <h1 class="text-3xl md:text-6xl">Your new home <br /> for collaboration.</h1>
                    <p class="md:text-xl">One shared space for all your cross-functional work</p>
                </section>

                <section class="space-y-3 w-[90%] md:w-1/2 lg:w-1/3 mx-auto">
                    <form wire:submit.prevent="submit" class="flex flex-col md:flex-row items-center justify-center space-x-0 md:space-x-3 space-y-3 md:space-y-0">
                        <x-input-field 
                        class="form-control form-control-lg md:text-lg md:w-[300px] w-full" model="email" type='text' placeholder="Enter your email ID"  />

                        <x-button 
                        class="btn bg-primary btn-block md:w-auto btn-lg md:text-lg font-bold" target="submit" text="Get Started" />
                    </form>
                    <div class="text-sm text-center">
                        <span>Already on Flock</span> <a href="{{ route('login') }}" class="text-primary underline">Sign in</a>
                    </div>
                </section>
            </section>

            <img src="{{ asset('images/hero-left-image.png') }}" class="hidden md:block absolute bottom-0 left-0 md:h-[170px] lg:h-[250px] w-auto" />
            <img src="{{ asset('images/hero-right-image.png') }}" class="hidden md:block absolute bottom-0 right-0 md:h-[170px] lg:h-[250px] w-auto" />
        </section>
</section>