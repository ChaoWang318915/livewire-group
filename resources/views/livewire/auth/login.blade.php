<main class="page-wrapper bg-light flex items-center justify-center p-5">
    <section class="w-full md:w-1/2 lg:w-2/5 flex flex-col items-center space-y-10">
        <header>
                    <a href="{{ route('home') }}">
                      <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo" class="logo-lg" />
                    </a>
        </header>

        <div class="bg-white w-full p-7 rounded-lg shadow-lg space-y-5 py-10">
            <section>
                <h3 class="text-xl md:text-2xl">Get started with Chanty</h3>
                 <p>Enter your work email address to continue</p>
            </section>

            <form class="grid gap-5" wire:submit.prevent="submit">
                    
                    <x-input-field 
                        class="form-control form-control-xl border" 
                        model="email" 
                        type='text' 
                        placeholder="Enter your email ID"  
                    />
        

                <div class="form-group">
                    <x-button 
                        class="btn bg-primary btn-xl text-sm w-full md:w-auto" 
                        target="submit" 
                        text="Login or Create an account" 
                    />
                </div>


            </form>
        </div>

        <footer class="text-center text-sm">
            <a href="#" class="text-secondary underline">Contact Support</a>
        </footer>
    </section>
</main>
