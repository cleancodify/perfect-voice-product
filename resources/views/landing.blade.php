<x-landing-layout title="Home">
  <!-- /header -->

  <section
    class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-[rgba(246,247,249,1)] bg-[center_bottom] bg-no-repeat bg-scroll z-0 xsm:!bg-none md:min-h-[25rem] sm:min-h-[20rem] xsm:min-h-[20rem] relative"
    data-image-src="/images/home/hero.jpg">
    <div class="container pt-28 pb-20 sm:!py-28 xxl:!py-40">
      <div class="flex flex-wrap mx-[-15px]">
        <div
          class="xl:w-6/12 lg:w-6/12 md:w-6/12 sm:w-6/12 xxl:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full xsm:!text-center text-left"
          data-cues="slideInDown" data-group="page-title" data-interval="-200" data-delay="500">
          <h2
            class="xl:text-[2.8rem] text-[calc(1.405rem_+_1.86vw)] font-bold !leading-[1.2] tracking-[-0.035em] mb-4 mt-0 xl:!mt-5 lg:!mt-5 xl:pr-5 xxl:pr-0">
            The <span
              class="underline-3 style-3 green !relative z-[1] after:content-[''] after:absolute after:z-[-1] after:block after:[background-size:100%_100%] after:bg-no-repeat after:bg-bottom after:bottom-[-0.1em] after:w-[110%] after:h-[0.3em] after:-translate-x-2/4 after:left-2/4">best
              voice</span> overs in one place </h2>
          <p class="lead text-[1.15rem] !leading-[1.5] font-medium mb-7 lg:pr-5 xl:pr-5 xxl:pr-0 ">Quickly and easily
            find the right voice actor in our range for your project</p>
          <div><a href="{{ route('actorList') }}"
              class="btn btn-lg btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded">Find
              Actors</a></div>
        </div>
        <!--/column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper !bg-[#ffffff]">
    <div class="container py-[5rem] xl:!py-[7rem] lg:!py-[7rem] md:!py-[7rem]">
      <div class="flex flex-wrap mx-[-15px] !text-center">
        <div class="md:w-10/12 lg:w-9/12 xl:w-9/12 xxl:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <h2 class="!text-[.75rem] uppercase text-[#aab0bc] !mb-3 tracking-[0.02rem] !leading-[1.35]">What We Do?</h2>
          <h3
            class="xl:text-[2rem] text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.25] tracking-[-0.03em] mb-9 xl:!px-12">
            The service we offer is specifically designed to meet your needs.</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-40px]">
        <div
          class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[40px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/telephone-3.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#343f52] text-blue mr-5 mt-1"
                alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Professional recordings</h4>
              <p class="!mb-0">Only works with the best voice-overs that deliver optimum quality from their professional
                home studio. </p>
            </div>
          </div>
        </div>
        <!--/column -->
        {{-- <div
          class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[40px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/shield.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#fab758] text-yellow mr-5 mt-1"
                alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Secure Payments</h4>
              <p class="!mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem aget
                elit nullam quis risus eget.</p>
            </div>
          </div>
        </div> --}}
        <!--/column -->
        <div
          class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[40px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/cloud-computing-2.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#f78b77] text-orange mr-5"
                alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Delivery time within 24 hours</h4>
              <p class="!mb-0">Urgently need a voice-over? Almost all our voice actors deliver within 1 working day and
                faster if desired!</p>
            </div>
          </div>
        </div>
        <!--/column -->
        {{-- <div
          class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[40px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/analytics.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#d16b86] text-pink mr-5"
                alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Market Research</h4>
              <p class="!mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem aget
                elit nullam quis risus eget.</p>
            </div>
          </div>
        </div> --}}
        <!--/column -->
        <div
          class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[40px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/chat-2.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#45c4a0] text-green mr-5 mt-1"
                alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Direct contact with the voice actor</h4>
              <p class="!mb-0">Chat directly with your voice-over! As soon as your order is placed you will be in direct
                contact with your chosen voice.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        {{-- <div
          class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[40px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/megaphone.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#747ed1] text-purple mr-5 mt-1"
                alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Content Marketing</h4>
              <p class="!mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem aget
                elit nullam quis risus eget.</p>
            </div>
          </div>
        </div> --}}
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section id="how_it_works" class="wrapper  bg-[rgba(246,247,249,1)]  !relative min-h-[60vh] lg:flex items-center">
    <div
      class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] max-w-full xl:!absolute lg:!absolute top-0 start-0 image-wrapper bg-image bg-cover !h-full bg-[center_center] bg-no-repeat bg-scroll z-0 min-h-[25rem] xl:h-auto lg:h-auto"
      data-image-src="/images/home/brand2.png">
      <div class="divider text-[#f6f7f9] divider-v-end hidden xl:block lg:block">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
          <g />
          <g>
            <g>
              <polygon fill="currentColor" points="48 0 0 0 48 1200 54 1200 54 0 48 0" />
            </g>
          </g>
        </svg>
      </div>
    </div>
    <!--/column -->
    <div class="container">
      <div class="flex flex-wrap mx-0">
        <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] max-w-full ml-auto">
          <div
            class="pt-[4.5rem] pb-20 xl:pb-[7rem] lg:pb-[7rem] md:pb-[7rem] lg:!py-[6rem] xl:!py-[6rem] lg:!pl-20 xl:!pl-20 xxl:!pr-24">
            <h2 class="!text-[.75rem] uppercase text-[#aab0bc] !mb-3 tracking-[0.02rem] !leading-[1.35]">How It Works?
            </h2>
            <h3 class="xl:text-[2rem] text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.25] tracking-[-0.03em] mb-7">
              Here are the 3 working steps on success.</h3>
            <div class="flex flex-row mb-5">
              <div>
                <img src="/images/icons/lineal/light-bulb.svg"
                  class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#343f52] mr-5 mt-1" alt="image">
              </div>
              <div>
                <h4 class="text-[1rem] tracking-[-0.03em]">Find the Perfect Voice</h4>
                <p class="!mb-0">Listen to samples, compare styles, and select the perfect voice to match your project’s
                  needs.</p>
              </div>
            </div>
            <div class="flex flex-row mb-5">
              <div>
                <img src="/images/icons/lineal/pie-chart-2.svg"
                  class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#45c4a0] text-green mr-5 mt-1"
                  alt="image">
              </div>
              <div>
                <h4 class="text-[1rem] tracking-[-0.03em]">Collaborate & Customize</h4>
                <p class="!mb-0">Provide script details, give feedback, and ensure the voiceover aligns perfectly with
                  your vision.</p>
              </div>
            </div>
            <div class="flex flex-row">
              <div>
                <img src="/images/icons/lineal/design.svg"
                  class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#fab758] text-yellow mr-5 mt-1"
                  alt="image">
              </div>
              <div>
                <h4 class="text-[1rem] tracking-[-0.03em]">Get Fast, High-Quality Delivery</h4>
                <p class="!mb-0">Enjoy hassle-free revisions if needed and bring your project to life with
                  studio-quality audio.</p>
              </div>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section id="actors" class="wrapper bg-[rgba(255,255,255)] opacity-100">
    <div class="container py-[5rem] xl:!py-[7rem] lg:!py-[7rem] md:!py-[7rem]">
      <div class="flex flex-wrap mx-[-15px] !text-center">
        <div class="lg:w-10/12 xl:w-7/12 xxl:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <h2 class="!text-[.75rem] uppercase text-[#aab0bc] !mb-3 tracking-[0.02rem] !leading-[1.35]">Spotlight on
            Voice Actors</h2>
          <h3 class="xl:text-[2rem] text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.25] tracking-[-0.03em] mb-10">
            Our featured voice actors deliver crystal-clear recordings with fast turnaround times.</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="relative z-10 mb-10 swiper-container blog grid-view featured-actors" data-margin="30" data-dots="true"
        data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            @foreach($featured_actors as $key => $actor)
            @php
              $photo_src = $actor->profile->gender == 'male' ? '/images/avatar_m.png' : '/images/avatar_f.png';
              if ($actor->profile->photo_src) {
                $photo_src = $actor->profile->photo_src;
              }
            @endphp
            <div class="swiper-slide">
              <article>
                <figure class="overlay overlay-1 hover-scale rounded !mb-6 group"><a href="{{ route('actorProfile', $actor->id) }}"> <img
                      class="!transition-all !duration-[0.35s] !ease-in-out group-hover:scale-105"
                      src="{{ $photo_src }}" alt="image"></a>
                  <figcaption
                    class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                    <h5 class="from-top  !mb-0 absolute w-full translate-y-[-80%] p-[.75rem_1rem] left-0 top-2/4">
                      View Profile
                    </h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <h2 class="post-title h3 !mb-3 !text-[1.1rem] !leading-[1.4]"><a
                      class="text-[#343f52] hover:text-[#343f52]" href="./blog-post.html">{{ $actor->first_name }} {{ $actor->last_name }}</a></h2>
                </div>
                <!-- /.post-header -->
                <div class="post-footer">
                  <ul class="text-[0.7rem] text-[#aab0bc] m-0 p-0 list-none">
                    <li class="inline-block post-date"><i
                        class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i>
                        <span>
                          Member since {{ $actor->created_at->diffForHumans() }}
                        </span>
                    </li>
                    <li
                      class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:mx-[0.6rem] before:my-0 before:rounded-[100%] before:bg-[#aab0bc] before:align-[0.15rem] !text-[.7rem]">
                      <a class="text-[#aab0bc] hover:text-[#343f52]" href="#"><i
                          class="uil uil-file-alt !text-[.75rem]  pr-[0.2rem] align-[-.05rem] before:content-['\eaec']"></i>Voice Actor</a>
                    </li>
                  </ul>
                  <!-- /.post-meta -->
                </div>
                <!-- /.post-footer -->
              </article>
              <!-- /article -->
            </div>              
            @endforeach
            <!--/.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper  bg-[rgba(246,247,249,1)]  !relative min-h-[60vh] lg:flex items-center">
    <div
      class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] max-w-full xl:!absolute lg:!absolute top-0 !right-0 image-wrapper bg-image !h-full bg-cover bg-[center_center] bg-no-repeat bg-scroll z-0 min-h-[25rem] xl:h-auto lg:h-auto"
      data-image-src="/images/home/relax.jpg">
      <div class="divider text-[#f6f7f9] divider-v-start hidden xl:block  lg:block">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
          <g />
          <g>
            <g>
              <polygon fill="currentColor" points="6 0 0 0 0 1200 6 1200 54 0 6 0" />
            </g>
          </g>
        </svg>
      </div>
    </div>
    <!--/column -->
    <div class="container">
      <div class="flex flex-wrap mx-0">
        <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] max-w-full">
          <div
            class="pt-[4.5rem] pb-20 xl:pb-[7rem] lg:pb-[7rem] md:pb-[7rem] xl:!py-[6rem] lg:!py-[6rem] xl:pr-20 lg:pr-20">
            <h2 class="text-[0.8rem] tracking-[0.02rem] uppercase text-[#aab0bc] !mb-3 !leading-[1.35]">Our Solutions
            </h2>
            <h3 class="xl:text-[2rem] text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.25] tracking-[-0.03em] mb-5">
              Seamless Voiceover Solutions for Your Business</h3>
            <p class="!mb-6">From script to final voiceover, we streamline the process, ensuring top-quality results
              with minimal effort on your part.</p>
            <div class="flex flex-wrap mx-[-15px] items-center counter-wrapper mt-[-30px]">
              <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
                <h3
                  class="counter counter-lg text-[calc(1.345rem_+_1.14vw)] tracking-[normal] !leading-none xl:text-[2.2rem] !mb-1">
                  99.7%</h3>
                <h6 class="text-[0.85rem] !mb-1">Customer Satisfaction</h6>
                <span
                  class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 five"></span>
              </div>
              <!--/column -->
              <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
                <h3
                  class="counter counter-lg text-[calc(1.345rem_+_1.14vw)] tracking-[normal] !leading-none xl:text-[2.2rem] !mb-1">
                  4x</h3>
                <h6 class="text-[0.85rem] !mb-1">New Visitors</h6>
                <span
                  class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 five"></span>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section id="who_we_are" class="wrapper bg-[rgba(255,255,255)] opacity-100">
    <div class="container py-[5rem] xl:!py-[7rem] lg:!py-[7rem] md:!py-[7rem]">
      <div
        class="flex flex-wrap mx-[-15px] xsm:mt-[-50px] mt-[-80px] md:mx-[-20px] xl:mx-[-35px] items-center mb-10 xl:!mb-14 lg:!mb-14 md:!mb-14">
        <div
          class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] md:px-[20px] px-[15px] max-w-full mt-[80px]">
          <div class="flex flex-wrap mx-[-15px] xl:mx-[-12.5px] lg:mx-[-12.5px] md:mx-[-12.5px] mt-[-25px]">
            <div
              class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] px-[15px] max-w-full mt-[25px]">
              <figure class="rounded-[0.4rem]"><img class="rounded-[0.4rem]" src="/images/home/c1.jpg" alt="image">
              </figure>
            </div>
            <!--/column -->
            <div
              class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] px-[15px] max-w-full !self-end mt-[25px]">
              <figure class="rounded-[0.4rem]"><img class="rounded-[0.4rem]" src="/images/home/c2.jpg" alt="image">
              </figure>
            </div>
            <!--/column -->
            <div
              class="w-full flex-[0_0_auto] xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] px-[15px] max-w-full mt-[25px]">
              <figure class="!rounded-[.4rem] xl:!mx-5 lg:!mx-5 md:!mx-5"><img class="!rounded-[.4rem]"
                  src="/images/home/c3.png" alt="image"></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div
          class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] md:px-[20px] px-[15px] max-w-full mt-[80px]">
          <h2 class="text-[0.75rem] tracking-[0.02rem] uppercase text-[#aab0bc] !mb-3 !leading-[1.35]">Who Are We?</h2>
          <h3 class="xl:text-[2rem] text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.25] tracking-[-0.03em] mb-5">A
            Marketplace Built for Creators & Businesses</h3>
          <p class="!mb-6">Our platform is designed to make hiring professional voice actors quick and hassle-free. With
            24-hour delivery and expert support, we bring your projects to life with exceptional audio quality.</p>
          <div class="flex flex-wrap mx-[-15px] mt-[-15px] xl:mx-[-20px]">
            <div class="xl:w-6/12 w-full flex-[0_0_auto] mt-[15px] xl:px-[20px] px-[15px] max-w-full">
              <ul class="pl-0 list-none bullet-bg bullet-soft-primary  !mb-0">
                <li class="relative pl-[1.25rem]"><span><i
                      class="uil uil-check absolute left-0 text-[1.05rem] leading-none tracking-[normal] !text-center flex items-center justify-center text-[#343f52] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i></span><span>Instantly
                    connect with professional voice actors in over 10 languages, ensuring the perfect match for your
                    project.</span></li>
                <li class="relative pl-[1.25rem] mt-3"><span><i
                      class="uil uil-check absolute left-0 text-[1.05rem] leading-none tracking-[normal] !text-center flex items-center justify-center text-[#343f52] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i></span><span>Get
                    high-quality voiceovers within 24 hours, with seamless communication and real-time support.</span>
                </li>
              </ul>
            </div>
            <!--/column -->
            <div class="xl:w-6/12 w-full flex-[0_0_auto] mt-[15px] xl:px-[20px] px-[15px] max-w-full">
              <ul class="pl-0 list-none bullet-bg bullet-soft-primary  !mb-0">
                <li class="relative pl-[1.25rem]"><span><i
                      class="uil uil-check absolute left-0 text-[1.05rem] leading-none tracking-[normal] !text-center flex items-center justify-center text-[#343f52] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i></span><span>Work
                    directly with voice artists to refine tone, style, and delivery for the best results.</span></li>
                <li class="relative pl-[1.25rem] mt-3"><span><i
                      class="uil uil-check absolute left-0 text-[1.05rem] leading-none tracking-[normal] !text-center flex items-center justify-center text-[#343f52] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i></span><span>No
                    hidden fees. Choose from a variety of pricing options that suit your budget and project
                    needs.</span></li>
              </ul>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-30px]">
        <div
          class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[30px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/target.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#343f52] mr-5" alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Our Vision</h4>
              <p class="!mb-2">At our core, we envision a world where every voice finds its audience effortlessly. We
                aim to revolutionize the voiceover industry by creating a seamless, accessible, and innovative
                marketplace that connects talented voice artists with businesses, creators, and brands worldwide.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div
          class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[30px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/award-2.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#45c4a0] text-green mr-5"
                alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Our Mission</h4>
              <p class="!mb-2">Our mission is to empower voice actors by providing them with opportunities to showcase
                their talent, grow their careers, and work on projects they love. For businesses, we strive to make
                hiring the perfect voice fast, reliable, and hassle-free, ensuring high-quality voiceovers with instant
                collaboration and 24-hour delivery.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div
          class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[35px] lg:px-[20px] mt-[30px]">
          <div class="flex flex-row">
            <div>
              <img src="/images/icons/lineal/loyalty.svg"
                class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#fab758] text-yellow mr-5"
                alt="image">
            </div>
            <div>
              <h4 class="text-[1rem] tracking-[-0.03em]">Our Values</h4>
              <p class="!mb-2">We are building a trusted, dynamic, and thriving community for both clients and voice
                actors worldwide.</p>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
    </div>
    <!-- /.container -->
  </section>

  <section
    class="wrapper  bg-[rgba(246,247,249,1)]  !relative min-h-[60vh] lg:flex items-center border-b border-solid border-[rgba(164,174,198,.2)]">
    <div
      class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] max-w-full xl:!absolute lg:!absolute top-0 !right-0 image-wrapper bg-image !h-full bg-cover bg-[center_center] bg-no-repeat bg-scroll z-0 min-h-[25rem] xl:h-auto lg:h-auto"
      data-image-src="/images/home/client.png">
    </div>
    <!--/column -->
    <div class="container">
      <div class="flex flex-wrap mx-0">
        <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] max-w-full">
          <div class="flex flex-wrap mx-0">
            <div class="w-full !pr-10 text-center">
              <span
                class="ratings  inline-block relative w-20 h-[0.8rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 five text-[1rem] !mb-3"></span>
              <blockquote class="!pl-0 text-[1rem] mb-0 border-0 !leading-[1.7] font-medium m-[0_0_1rem]">
                <p>“This platform has completely transformed how we source voiceovers! Finding the perfect voice is
                  effortless, and the 24-hour delivery is a game-changer. The direct collaboration with voice actors
                  ensures we get exactly what we need every single time. Highly recommended!”</p>
                <div class="flex items-center justify-center !text-center">
                  <div class="p-0 info">
                    <h4 class="tracking-[-0.03em] !mb-1">Michael M.</h4>
                    <p class="!mb-0 text-[.8rem]">Creative Director at VoxMedia</p>
                  </div>
                </div>
              </blockquote>
            </div>
            <!-- /column -->
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  </div>
</x-landing-layout>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      scrollCue.init({
      interval: -400,
      duration: 700,
      percentage: 0.8
    });
    scrollCue.update();
  });
</script>