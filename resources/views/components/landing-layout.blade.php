<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>{{ config('app.name') }} @isset($title)
		- {{ $title }}
		@endisset
	</title>

	<!-- CSS & JS Assets -->
	@vite(['resources/css/landing.css', 'resources/fonts/unicons/unicons.css', 'resources/js/app.js',
	'resources/js/landing.js'])
	{{-- @vite(['resources/fonts/unicons/unicons.css', 'resources/js/app.js',
	'resources/js/landing.js']) --}}
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/scrollcue@2.0.0/scrollCue.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet" />

	<script src="https://cdn.jsdelivr.net/npm/scrollcue@2.0.0/scrollCue.min.js"></script>

	@isset($head)
	{{ $head }}
	@endisset

</head>

@php
$currentRoute = Route::currentRouteName();
@endphp

<body x-data x-bind="$store.global.documentBody">

	<!-- App preloader-->
	{{-- <x-app-preloader></x-app-preloader> --}}

	<!-- Page Wrapper -->
	<div id="root" class="grow shrink-0" x-cloak>
		<header class="relative wrapper !bg-[#ffffff] ">
			<nav class="navbar navbar-expand-lg classic transparent !absolute navbar-light">
				<div class="container xl:flex-row lg:flex-row !flex-nowrap items-center">
					<div class="navbar-brand">
						<a href="/">
							<img width="200" src="/images/logo-white.png" alt="image">
						</a>
					</div>
					<div class="w-full navbar-collapse offcanvas offcanvas-nav offcanvas-start">
						<div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex mr-auto flex-col !h-full">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link font-bold tracking-[-0.01rem] {{ $currentRoute == 'aboutUs' ? '!text-primary' : '' }}"
										href="{{ route('aboutUs') }}">About us</a>
								</li>

								<li class="nav-item">
									<a class="nav-link font-bold tracking-[-0.01rem] {{ $currentRoute == 'howWorks' ? '!text-primary' : '' }}"
										href="{{ route('howWorks') }}">How it works</a>
								</li>

								<li class="nav-item">
									<a class="nav-link font-bold tracking-[-0.01rem] {{ $currentRoute == 'contactUs' ? '!text-primary' : '' }}"
										href="{{ route('contactUs') }}">Contact us</a>
								</li>

								<li class="nav-item">
									<a class="nav-link font-bold tracking-[-0.01rem] {{ $currentRoute == 'services' ? '!text-primary' : '' }}"
										href="{{ route('services') }}">Services</a>
								</li>

								<li class="nav-item">
									<a class="nav-link font-bold tracking-[-0.01rem] {{ $currentRoute == 'faq' ? '!text-primary' : '' }}"
										href="{{ route('faq') }}">FAQ</a>
								</li>

							</ul>
							<!-- /.offcanvas-footer -->
						</div>

						@guest
						<a href=" {{ route('login') }}"
							class="btn btn-md btn-navy !text-primary !bg-white !border-primary hover:!text-white hover:border-primary hover:!bg-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">Sign
							in Now</a>
						@endguest
						@auth

						<a href="{{ route('dashboard') }}"
							class="btn btn-md btn-navy !text-primary !bg-white !border-primary hover:!text-white hover:border-primary hover:!bg-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">Go
							to dashboard</a>
						@endauth
						<!-- /.offcanvas-body -->
					</div>
					<!-- /.navbar-other -->
				</div>
				<!-- /.container -->
			</nav>

			<!-- /.offcanvas -->
			<div class="offcanvas offcanvas-top !bg-[#ffffff] " id="offcanvas-search" data-bs-scroll="true">
				<div class="container flex flex-row py-6">
					<form
						class=" search-form relative before:content-['\eca5'] before:block before:absolute before:-translate-y-2/4 before:text-[1rem] before:text-[#343f52] before:z-[1] before:right-auto before:top-2/4 before:font-Unicons w-full before:left-0 focus:!outline-offset-0 focus:outline-0">
						<input id="search-form1" type="text"
							class="form-control text-[0.8rem] !shadow-none pl-[1.75rem] !pr-[.75rem] border-0 bg-inherit m-0 block w-full font-medium leading-[1.7] text-[#60697b] px-4 py-[0.6rem] rounded-[0.4rem] focus:!outline-offset-0 focus:outline-0"
							placeholder="Type keyword and hit enter">
					</form>
					<button type="button"
						class="btn-close leading-none text-[#343f52] transition-all duration-[0.2s] ease-in-out p-0 border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(0,0,0,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] focus:outline-0"
						data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<!-- /.container -->
			</div>
			<!-- /.offcanvas -->
		</header>

		{{ $slot }}


		<!-- /.content-wrapper -->
		<footer class="bg-[rgba(246,247,249,1)]">
			<div class="container py-16 xl:!py-20 lg:!py-20 md:!py-20">
				<div class="xl:flex lg:flex flex-row xl:!items-center lg:!items-center">
					<h3
						class="xl:text-[2rem] text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.25] tracking-[-0.03em] !mb-6 lg:!mb-0 xl:!mb-0 lg:pr-40 xl:pr-60 xxl:pr-[22.5rem]">
						Connect with top voice talent to elevate your brand with seamless voiceovers.</h3>
					<a href="{{ route('register') }}"
						class="btn btn-lg btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">Sign
						Up Now</a>
				</div>
				<!--/div -->
				<hr
					class="mt-[3rem] mb-[3.5rem] opacity-100 m-[4.5rem_0] border-t border-solid border-[rgba(164,174,198,.2)]">
				<div class="flex flex-wrap mx-[-15px] mt-[-30px] xl:mt-0 lg:mt-0">
					<div
						class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
						<div class="widget">
							<img class="!mb-4 w-48" src="/images/logo-white.png" alt="image">

							<!-- /.social -->
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
					<div
						class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
						<div class="widget">
							<h4 class="widget-title !mb-3 !tracking-[-0.03em]">Get in Touch</h4>
							{{-- <address class="xl:pr-20 xxl:!pr-28 not-italic leading-[inherit] block mb-4">Moonshine St.
								14/05 Light
								City, London, United Kingdom</address> --}}
							<a class="text-[#60697b] hover:text-[#60697b]"
								href="mailto:{{ env('EMAIL_SALS') }}">{{ env('EMAIL_SALS') }}</a><br>
              <a class="text-[#60697b] hover:text-[#60697b]"
								href="tel:{{ env('PHONE_NUMBER') }}">{{ env('PHONE_NUMBER') }}</a><br>
              
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
					<div
						class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
						<div class="widget">
							<h4 class="widget-title !mb-3 !tracking-[-0.03em]">Learn More</h4>
							<ul class="pl-0 list-none !mb-0">
								<li>
									<a class="text-[#60697b] hover:text-[#343f52]" href="{{ route('aboutUs') }}">
										About Us
									</a>
								</li>

								<li class="mt-[0.35rem]">
									<a class="text-[#60697b] hover:text-[#343f52]" href="{{ route('howWorks') }}">
										How It Works
									</a>
								</li>

								<li class="mt-[0.35rem]">
									<a class="text-[#60697b] hover:text-[#343f52]" href="{{ route('contactUs') }}">
										Contact us
									</a>
								</li>

								<li class="mt-[0.35rem]">
									<a class="text-[#60697b] hover:text-[#343f52]" href="{{ route('services') }}">
										Services
									</a>
								</li>

								<li class="mt-[0.35rem]">
									<a class="text-[#60697b] hover:text-[#343f52]" href="{{ route('faq') }}">
										FAQ
									</a>
								</li>
							</ul>
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
					<div
						class="md:w-full xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
						<div class="widget">
							<p class="!mb-4">© 2025 Picture Perfect Voices <br class="hidden xl:block lg:block">All
								rights reserved.
							</p>
							<nav class="nav social social-muted">
								<a class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
									href="#"><i
										class="uil uil-twitter before:content-['\ed59'] text-[1rem] text-[#5daed5]"></i></a>
								<a class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
									href="#"><i
										class="uil uil-facebook-f before:content-['\eae2'] text-[1rem] text-[#4470cf]"></i></a>
								<a class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
									href="#"><i
										class="uil uil-dribbble before:content-['\eaa2'] text-[1rem] text-[#e94d88]"></i></a>
								<a class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
									href="#"><i
										class="uil uil-instagram before:content-['\eb9c'] text-[1rem] text-[#d53581]"></i></a>
								<a class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
									href="#"><i
										class="uil uil-youtube before:content-['\edb5'] text-[1rem] text-[#c8312b]"></i></a>
							</nav>
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
				</div>
				<!--/.row -->
			</div>
			<!-- /.container -->
		</footer>

		<div
			class="progress-wrap fixed w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] z-[1010] opacity-0 invisible translate-y-3 transition-all duration-[0.2s] ease-[linear,margin-right] delay-[0s] rounded-[100%] right-6 bottom-6 motion-reduce:transition-none after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:text-primary after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path
					class="fill-none stroke-primary stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none"
					d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>
	</div>

	<!--
  This is a place for Alpine.js Teleport feature
  @see https://alpinejs.dev/directives/teleport
-->
	<div id="x-teleport-target"></div>

	<script>
		window.addEventListener("DOMContentLoaded", () => Alpine.start());
	</script>

	@isset($script)
	{{ $script }}
	@endisset

</body>

</html>