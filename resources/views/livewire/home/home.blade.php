<main class="page-wrapper">
    @livewire("home.hero")

    <section>
        <div class="container py-20 grid md:grid-cols-3 gap-5">
            <section class="md:col-span-2">
                <img src="{{ asset('images/46b2132c01604c9493d558de444929f4.svg') }}" alt="" />
            </section>

            <section class="space-y-5 md:pt-10">
                <h3 class="text-2xl md:text-4xl">Create an invite-only place where you belong</h3>

                <p class="md:text-lg">Chanty servers are organized into topic-based channels where you can collaborate, share, and just talk about your day without clogging up a group chat.</p>
            </section>
        </div>
    </section>


     <section class="bg-light">
        <div class="container py-20 grid md:grid-cols-3 gap-5">
            <section class="md:col-span-2 order-1 md:order-2">
                <img src="{{ asset('images/575a0322f3b36ca2fecb23ad2c6dd5ad.svg') }}" alt="" />
            </section>

            <section class="space-y-5 md:pt-10 order-2 md:order-1">
                <h3 class="text-2xl md:text-4xl">Where hanging out is easy</h3>

                <p class="md:text-lg">Grab a seat in a voice channel when you’re free. Friends in your server can see you’re around and instantly pop in to talk without having to call.</p>
            </section>
        </div>
    </section>



    <section>
        <div class="container py-20 grid md:grid-cols-3 gap-5">
            <section class="md:col-span-2">
                <img src="{{ asset('images/921b1ae33edca174b6ebe787bb8b6c3b.svg') }}" alt="" />
            </section>

            <section class="space-y-5 md:pt-10">
                <h3 class="text-2xl md:text-4xl">From few to a fandom</h3>

                <p class="md:text-lg">Get any community running with moderation tools and custom member access. Give members special powers, set up private channels, and more.</p>
            </section>
        </div>
    </section>
</main>
 @livewire("inc.footer")
