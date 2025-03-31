<x-landing-layout title="About us">
    <section class="wrapper !bg-[#edf2fc]">
        <div class="container pt-10 p-18 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem] !text-center">
            <div class="flex flex-wrap mx-[-15px] md:mt-18">
                <div class="xl:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !mb-6">
                    <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3">
                        About Us
                    </h1>
                    <p class="lead text-[0.9rem] font-medium leading-[1.65] !mb-0">
                        When you need professional voice over services for corporate voice overs, radio commercials,
                        story narration, character
                        voice overs, documentaries, audio books, video games, and more, {{ config('app.name') }} stands
                        out as the ultimate solution.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper  bg-[rgba(246,247,249,1)] ">
        <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
            <div
                class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] !mb-[4.5rem] xl:!mb-24 lg:!mb-24 md:!mb-24 items-center">
                <div
                    class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
                    <figure class="p-0 m-0">
                        <img class="w-full" src="images/home/handshake.png" alt="image">
                    </figure>
                </div>

                <div
                    class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
                    <h3 class="text-[calc(1.285rem_+_0.42vw)] font-bold xl:text-[1.6rem] !leading-[1.3] mb-7 xxl:pr-5">
                        Ease of Use for Clients
                    </h3>

                    <div class="flex flex-row mb-4">
                        <div>
                            <img src="images/icons/lineal/megaphone.svg"
                                class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  text-[#3f78e0] !mr-4" alt="image">
                        </div>
                        <div>
                            <h4 class="!mb-1">Easy process</h4>
                            <p class="!mb-1">
                                From start to finish, <span class="text-primary">{{ config('app.name') }}</span> offers
                                an intuitive,
                                user-friendly experience.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-row mb-4">
                        <div>
                            <img src="images/icons/lineal/settings-3.svg"
                                class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  text-[#45c4a0] text-green !mr-4"
                                alt="image">
                        </div>
                        <div>
                            <h4 class="!mb-1">Easy browse, choose perfect voice talent</h4>
                            <p class="!mb-1">Our platform allows clients to easily browse and choose the perfect voice
                                talent for their project, connect directly
                                through chat, and get their recordings delivered fast.</p>
                        </div>
                    </div>

                    <div class="flex flex-row">
                        <div>
                            <img src="images/icons/lineal/target.svg"
                                class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  text-[#fab758] text-yellow !mr-4"
                                alt="image">
                        </div>
                        <div>
                            <h4 class="!mb-1">The best quality</h4>
                            <p class="!mb-0">
                                We’ve simplified the process to ensure that you get the best quality voice
                                over services without any hassle.
                            </p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] items-center">
                <div
                    class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full xl:!order-2 lg:!order-2">
                    <figure class="p-0 m-0"><img class="w-full" src="images/home/choouse_us.jpg" alt="image"></figure>
                </div>

                <div
                    class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[40px] max-w-full">
                    <h3 class="text-[calc(1.285rem_+_0.42vw)] font-bold xl:text-[1.6rem] !leading-[1.3] mb-7">
                        A few reasons why our valued customers choose us.
                    </h3>

                    <div class="accordion accordion-wrapper" id="accordionExample">
                        <div class="card plain accordion-item">
                            <div class="card-header !mb-0 !p-[0_0_.8rem_0] !border-0 !bg-inherit" id="headingOne">
                                <button
                                    class="accordion-button !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"> Incredible Pool of Voice Over Talent </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="card-body !p-[0_0_0_1.1rem]">
                                    <p>With a vast roster of talented voice professionals, we ensure you find the
                                        perfect fit for your project. Whether you
                                        need a corporate, friendly, authoritative, or character-driven voice,
                                        <span class="text-primary">{{ config('app.name') }}</span> features voice actors
                                        with decades of experience in a variety of genres. Our talent pool includes
                                        voices for any need—from commercials and
                                        video games to audiobooks and documentaries.
                                    </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>


                        <div class="card plain accordion-item">
                            <div class="card-header !mb-0 !p-[0_0_.8rem_0] !border-0 !bg-inherit" id="headingSix">
                                <button class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix"> Great Prices & Competitive Pricing
                                </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="card-body !p-[0_0_0_1.1rem]">
                                    <p>We believe high-quality voice over services should be accessible without breaking
                                        the bank.
                                        <span class="text-primary">{{ config('app.name') }}</span>
                                        offers competitive pricing that ensures you get excellent value for your
                                        investment. Whether you’re working on a tight
                                        budget or need top-tier talent, we have options that suit your needs without
                                        compromising on quality.
                                    </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>

                        <div class="card plain accordion-item">
                            <div class="card-header !mb-0 !p-[0_0_.8rem_0] !border-0 !bg-inherit" id="headingSeven">
                                <button class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven"> Direct Connection to Voice Talent Through Chat
                                </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="card-body !p-[0_0_0_1.1rem]">
                                    <p>One of the best features of our service is the ability to communicate directly
                                        with the voice talent through our
                                        built-in chat system. This direct line of communication ensures that you can
                                        discuss your project details, provide
                                        feedback, and make sure the final product matches your vision. This saves time
                                        and fosters better collaboration,
                                        ensuring the best results.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>

                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header !mb-0 !p-[0_0_.8rem_0] !border-0 !bg-inherit" id="headingTwo">
                                <button class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo"> Free Re-recordings </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="card-body !p-[0_0_0_1.1rem]">
                                    <p>We want you to be completely satisfied with your voice over recordings. That’s
                                        why we offer free re-recordings to ensure
                                        that the final product meets your expectations. If something doesn’t sound quite
                                        right, we’ll work with you until it’s
                                        perfect.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header !mb-0 !p-[0_0_.8rem_0] !border-0 !bg-inherit" id="headingThree">
                                <button class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree"> Turn-Key Services </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="card-body !p-[0_0_0_1.1rem]">
                                    <p>
                                        From casting to final delivery,
                                        <span class="text-primary">{{ config('app.name') }}</span>
                                        offers turn-key services
                                        that take care of everything you need.
                                        We handle all the details, so you can focus on the creative aspects of your
                                        project. Our team ensures smooth,
                                        streamlined communication and execution every step of the way.
                                    </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                    </div>
                    <!--/.accordion -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper !bg-[#ffffff]">
        <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
            <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] items-center">
                <div
                    class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
                    <h2
                        class="!text-[.75rem] uppercase text-line relative align-top pl-[1.4rem] inline-flex tracking-[0.02rem] leading-[1.35] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0] text-[#3f78e0] !mb-3">
                        Meet the Agency
                    </h2>
                    <h3 class="text-[calc(1.285rem_+_0.42vw)] font-bold xl:text-[1.6rem] !leading-[1.3] mb-5">
                        Top USA-Based Agency
                    </h3>

                    <p>
                        As a top USA-based voice over agency, we pride ourselves on offering professional, high-caliber
                        services that meet the
                        highest standards. We collaborate with experienced talent who have worked on global campaigns
                        and projects, ensuring
                        that you receive world-class quality.
                    </p>
                </div>
                <!--/column -->
                <div
                    class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">

                    <div class="swiper-container !text-center !mb-6" data-margin="30" data-dots="true" data-items-xl="3"
                        data-items-md="2" data-items-xs="1">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="rounded-[50%] w-40 h-40 object-cover !mx-auto mb-4"
                                        src="images/home/usa_agency1.jpg" alt="image">
                                    <h4 class="!mb-1">William Morris Endeavor</h4>
                                    <div
                                        class="text-[0.65rem] uppercase tracking-[0.02rem] font-bold text-[#aab0bc] mb-2">
                                        Influencer & Celebrity Marketing
                                    </div>
                                    <p class="!mb-2">A top talent agency known for representing artists and creators globally.</p>
                                </div>

                                <div class="swiper-slide">
                                    <img class="rounded-[50%] w-40 h-40 object-cover !mx-auto mb-4"
                                        src="images/home/usa_agency2.jpg" alt="image">
                                    <h4 class="!mb-1">Rob Jellison Voiceovers</h4>
                                    <div
                                        class="text-[0.65rem] uppercase tracking-[0.02rem] font-bold text-[#aab0bc] mb-2">
                                        Commercial, Corporate, and E-learning Voiceovers
                                    </div>
                                    <p class="!mb-2">A skilled voice actor delivering professional and reliable voiceovers.</p>
                                </div>

                                <div class="swiper-slide">
                                    <img class="rounded-[50%] w-40 h-40 object-cover !mx-auto mb-4"
                                        src="images/home/usa_agency3.jpg" alt="image">
                                    <h4 class="!mb-1">Beau Thomas Voiceovers</h4>
                                    <div
                                        class="text-[0.65rem] uppercase tracking-[0.02rem] font-bold text-[#aab0bc] mb-2">
                                        Narration, Animation, and International Voiceovers
                                    </div>
                                    <p class="!mb-2">A versatile voice actor with expertise in diverse projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper  bg-[rgba(246,247,249,1)] ">
        <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
            <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-30px] mb-14 items-center">
                <div
                    class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[70px] max-w-full xl:!order-2 lg:!order-2">
                    <figure class="p-0 m-0"><img class="w-full" src="/images/home/voice-over.jpg" alt="image"></figure>
                </div>

                <div
                    class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[70px] max-w-full xl:!mt-[4.5rem] lg:!mt-[4.5rem]">
                    <div class="swiper-container dots-closer !mb-6" data-margin="30" data-dots="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <blockquote
                                        class="icon icon-top text-[1rem] !text-center relative pt-[3.75rem] p-0 border-0 leading-[1.7] font-medium m-[0_0_1rem] before:translate-x-[-52%] before:left-2/4 before:content-['\201c'] before:text-[#aab0bc] before:opacity-30 before:text-[6.5rem] before:font-normal before:absolute before:leading-none before:z-[1] before:top-0">
                                        <p>“The quality of our recordings is second to none. We work with only the best
                                            in the industry, utilizing state-of-the-art
                                            equipment and professional-grade studios to ensure crystal-clear,
                                            top-quality audio that will elevate your project.
                                            Whether it’s a commercial, audiobook, or video game, your voice over will
                                            sound polished and professional.”
                                        </p>
                                        <div class="flex items-center justify-center !text-center">
                                            <div class="info !pl-0">
                                                <h5 class="!mb-1 text-[.95rem] !leading-[1.5]">High-Quality Recordings
                                                </h5>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote
                                        class="icon icon-top text-[1rem] !text-center relative pt-[3.75rem] p-0 border-0 leading-[1.7] font-medium m-[0_0_1rem] before:translate-x-[-52%] before:left-2/4 before:content-['\201c'] before:text-[#aab0bc] before:opacity-30 before:text-[6.5rem] before:font-normal before:absolute before:leading-none before:z-[1] before:top-0">
                                        <p>
                                            We understand that time is of the essence in the world of voice overs.
                                            That’s why <span class="text-primary">{{ config('app.name') }}</span> offers
                                            quick
                                            turnaround times to meet your project deadlines. Whether it’s a last-minute
                                            radio spot or an audiobook needing
                                            narration, we’ll make sure you get your recordings back as soon as possible
                                            without sacrificing quality.
                                        </p>
                                        <div class="flex items-center justify-center !text-center">
                                            <div class="info !pl-0">
                                                <h5 class="!mb-1 text-[.95rem] !leading-[1.5]">Fast Turnaround Times
                                                </h5>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote
                                        class="icon icon-top text-[1rem] !text-center relative pt-[3.75rem] p-0 border-0 leading-[1.7] font-medium m-[0_0_1rem] before:translate-x-[-52%] before:left-2/4 before:content-['\201c'] before:text-[#aab0bc] before:opacity-30 before:text-[6.5rem] before:font-normal before:absolute before:leading-none before:z-[1] before:top-0">
                                        <p>
                                            Once your voice over is recorded, we make sure the process is as smooth as
                                            possible by offering e-delivery of
                                            recordings. No need for mailing or waiting—just a fast, secure online
                                            transfer of your audio files, ready to use
                                            whenever you need them.
                                        </p>
                                        <div class="flex items-center justify-center !text-center">
                                            <div class="info !pl-0">
                                                <h5 class="!mb-1 text-[.95rem] !leading-[1.5]">E-Delivery of Recordings
                                                </h5>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>

                                <div class="swiper-slide">
                                    <blockquote
                                        class="icon icon-top text-[1rem] !text-center relative pt-[3.75rem] p-0 border-0 leading-[1.7] font-medium m-[0_0_1rem] before:translate-x-[-52%] before:left-2/4 before:content-['\201c'] before:text-[#aab0bc] before:opacity-30 before:text-[6.5rem] before:font-normal before:absolute before:leading-none before:z-[1] before:top-0">
                                        <p>
                                            With years of industry experience, <span
                                                class="text-primary">{{ config('app.name') }}</span> has worked with
                                            countless clients across a range of
                                            industries, providing exceptional voice over services. Our experience means
                                            we understand the nuances of various media
                                            formats and know how to deliver exactly what you need.
                                        </p>
                                        <div class="flex items-center justify-center !text-center">
                                            <div class="info !pl-0">
                                                <h5 class="!mb-1 text-[.95rem] !leading-[1.5]">Leading Industry
                                                    Experience</h5>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>

                                <div class="swiper-slide">
                                    <blockquote
                                        class="icon icon-top text-[1rem] !text-center relative pt-[3.75rem] p-0 border-0 leading-[1.7] font-medium m-[0_0_1rem] before:translate-x-[-52%] before:left-2/4 before:content-['\201c'] before:text-[#aab0bc] before:opacity-30 before:text-[6.5rem] before:font-normal before:absolute before:leading-none before:z-[1] before:top-0">
                                        <p>
                                            At <span class="text-primary">{{ config('app.name') }}</span>, our clients
                                            are our top priority. We are fully
                                            dedicated to ensuring your satisfaction,
                                            providing personalized service, and offering solutions that make your
                                            experience easy and rewarding. We’re here for you
                                            every step of the way to ensure your project is a success.
                                        </p>
                                        <div class="flex items-center justify-center !text-center">
                                            <div class="info !pl-0">
                                                <h5 class="!mb-1 text-[.95rem] !leading-[1.5]">
                                                    Dedication to the Client
                                                </h5>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper !bg-[#ffffff]">
        <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
            <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] items-center">
                <div
                    class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
                    <figure class="p-0 m-0"><img class="w-full" src="/images/home/commercial .jpg" alt="image"></figure>
                </div>
                <!--/column -->
                <div
                    class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
                    <h2
                        class="!text-[.75rem] uppercase text-line relative align-top pl-[1.4rem] inline-flex tracking-[0.02rem] leading-[1.35] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0] text-[#3f78e0] !mb-3">
                        Conclusion
                    </h2>
                    <h3 class="text-[calc(1.285rem_+_0.42vw)] font-bold xl:text-[1.6rem] !leading-[1.3] mb-7">
                        Offers everything you need
                    </h3>
                    <div class="flex flex-row">
                        <div>
                            <h5 class="!mb-1">Offer corporate voice over, radio commercial and audiobook</h5>
                            <p>
                                <span class="text-primary">{{ config('app.name') }}</span> offers corporate voice overs,
                                radio commercials, and audiobook narrations—all tailored to
                                perfection
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div>
                            <h5 class="!mb-1">provide a seamless and professional voice over experience</h5>
                            <p>
                                Provide a seamless and professional voice over experience with experienced talent, fast
                                turnarounds, and exceptional
                                service
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div>
                            <h5 class="!mb-1">Let us bring your ideas to life with the perfect voice!</h5>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
</x-landing-layout>