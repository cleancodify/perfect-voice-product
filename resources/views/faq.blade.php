<x-landing-layout title="How it works">
    <div class="grow shrink-0">
        <section class="wrapper !bg-[#edf2fc]">
            <div class="container pt-[6.5rem] pb-14 md:pt-[6.5rem] xl:pb-20 lg:pb-20 md:pb-20 !text-center">
                <div class="flex flex-wrap mx-[-15px]">
                    <div class="md:w-9/12 lg:w-7/12 xl:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
                        <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3">
                            FAQ
                        </h1>
                        <p class="lead lg:!px-[3rem] xl:!px-[3rem] leading-[1.65] text-[0.9rem] font-medium">
                            Find answers to some frequently asked questions here.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="flex flex-wrap mx-[-15px]">
                <aside
                    class="xl:w-2/12 flex-[0_0_auto] px-[15px] max-w-full sidebar doc-sidebar md:!mt-0 py-24 hidden  xl:block">
                    <div class="pb-3 widget">
                        <h6 class="widget-title text-[0.85rem] mb-2">Usage</h6>
                        <nav id="collapse-usage">
                            <ul class="list-unstyled pl-0 list-none text-[0.7rem] leading-normal text-inherit">
                                <li>
                                    <a href="../docs/index.html" class="!text-inherit hover:!text-[#3f78e0]">Get
                                        Started
                                    </a>
                                </li>

                                <li class="mt-[0.35rem]">
                                    <a class="!text-inherit hover:!text-[#3f78e0]" href="../docs/forms.html">
                                        Forms
                                    </a>
                                </li>

                                <li class="mt-[0.35rem]">
                                    <a class="{{ Request::is('faq') ? 'active' : '!text-inherit hover:!text-[#3f78e0]' }}"
                                        href="{{ route('faq') }}">
                                        FAQ
                                    </a>
                                </li>

                                <li class="mt-[0.35rem]">
                                    <a class="!text-inherit hover:!text-[#3f78e0]" href="../docs/changelog.html">
                                        Changelog
                                    </a>
                                </li>

                                <li class="mt-[0.35rem]">
                                    <a class="!text-inherit hover:!text-[#3f78e0]" href="../docs/credits.html">
                                        Credits
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <div class="xl:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:!order-2">
                    <section id="snippet-1" class="py-24 wrapper">
                        <h2 class="!mb-3 !leading-[1.35]">Frequently Asked Questions</h2>
                        <p class="lead leading-[1.65] text-[0.9rem] font-medium mb-5">
                            If you don't see an answer to your question here, please feel free to contact us with the
                            links below:
                        </p>

                        <div class="mt-10 accordion accordion-wrapper" id="accordion">
                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-2">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true"
                                        aria-controls="faq-collapse-2"> How does PicturePerfectVoice work?
                                    </button>
                                </div>
                                <!--/.card-header -->
                                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            PicturePerfectVoice offers professional voice actors who record your project
                                            within 24 hours at the most competitive rates.
                                            Each voice-over voice has its own rates, you never pay too much!
                                            On our voice-over platform you can easily book a voice. As soon as an order
                                            is placed, you’re in direct contact with the
                                            voice-over. Through the chat function you can easily give instructions.
                                            Not completely satisfied? Ask for a free retake in the chatbox.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-3">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true"
                                        aria-controls="faq-collapse-3">
                                        I can't choose between all those voices. What now?
                                    </button>
                                </div>
                                <!--/.card-header -->
                                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            We are happy to help you with this!
                                            Describe your project and the type of voice you are looking for. We'll
                                            provide you with some demos of the most suitable
                                            voices for your project.
                                            Don’t hesitate to ask for a free trial recording so you can easily choose
                                            the most suitable voice.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-4">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true"
                                        aria-controls="faq-collapse-4"> Can I have a test recording?
                                    </button>
                                </div>

                                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            Of course! Contact us, we immediately ask the
                                            voice(s) to record a test recording within 24
                                            hours. Don't forget to add a piece of the script and any instructions such
                                            as the desired tone of voice.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-5">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true"
                                        aria-controls="faq-collapse-5">
                                        What is the delivery time?
                                    </button>
                                </div>
                                <!--/.card-header -->
                                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            We deliver very fast, most voice-overs are in your possession within 24
                                            hours! You can see the delivery time in the
                                            profile of the voice actor. If needed, you can always enter the deadline
                                            during the ordering process.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-7">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true"
                                        aria-controls="faq-collapse-7"> I need my recordings the same day, is this
                                        possible?
                                    </button>
                                </div>

                                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            Some voices deliver within 4 or 12 hours! If you place your order before
                                            noon or 2 p.m., the order will be in your
                                            possession the same day!
                                            Does the desired voice only deliver within 24 or 48 hours? No problem, mail
                                            or call us and we'll see what's possible.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-8">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true"
                                        aria-controls="faq-collapse-8">
                                        How are the recordings delivered?
                                    </button>
                                </div>
                                <!--/.card-header -->
                                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            Recordings are always delivered rough in 48khz 24bit.
                                            You can always ask via the chatbox to deliver the recordings in mp3 or
                                            another format.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-9">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true"
                                        aria-controls="faq-collapse-9">
                                        The script has been changed, what should I do now?
                                    </button>
                                </div>

                                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            If the voice actor hasn't started recording yet, it's best to let him know
                                            via the chat function, in this case the
                                            voice-over will take this into account.
                                            Has the recording been done yet? Often a voice-over is very flexible and
                                            will give you a retake.
                                            Note: The voice-over voice may charge a small fee.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-11">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-11" aria-expanded="true"
                                        aria-controls="faq-collapse-11">
                                        What if I'm not completely satisfied with the recording?
                                    </button>
                                </div>

                                <div id="faq-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-11">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            Feel free to ask for a (free) retake via the chat function, the voice-over
                                            will provide you with a new recording as soon
                                            as possible.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 card accordion-item">
                                <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit"
                                    id="faq-13">
                                    <button
                                        class="collapsed !text-[.85rem] before:!text-[#3f78e0] hover:!text-[#3f78e0]"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapse-13" aria-expanded="true"
                                        aria-controls="faq-collapse-13">
                                        My script has yet to be translated, do you do this too?
                                    </button>
                                </div>

                                <div id="faq-collapse-13" class="accordion-collapse collapse" aria-labelledby="faq-13">
                                    <div class="card-body p-[0_1.25rem_.25rem_2.35rem]">
                                        <p>
                                            Of course! We work together with an ISO certified translation agency. We can
                                            have your script translated at the most
                                            competitive rates.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-landing-layout>