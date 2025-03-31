<x-landing-layout title="Login">
    <section class="wrapper bg-light !bg-[#ffffff] pt-28">
        <div class="container !pb-[4.5rem] pt-28 md:pt-36 xl:!pb-24 lg:!pb-24 md:!pb-24">
            <div class="flex flex-wrap mx-[-15px]">
                <div class="w-full px-[15px] max-w-full !mt-[-10rem]">
                    <div class="!shadow-none card">
                        <div class="card-body grid grid-cols-1 md:grid-cols-2 gap-4 md:!p-12 !text-center w-full">
                            <div class="col-span-1">
                                <div class="w-full max-w-sm">
                                    <h2 class="mb-3 text-left">Login</h2>
                                    <p class="lead text-[0.9rem] font-medium !leading-[1.65] !mb-6 text-left">
                                        Fill your email and password to sign in.
                                    </p>
                                    <form id="login-form" class="text-left !mb-3" action="{{ route('login') }}"
                                        method="post">
                                        @method('POST') @csrf
                                        <div class="mb-4">
                                            <div class="form-floating !relative">
                                                <input type="email"
                                                    class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0"
                                                    placeholder="Email" name="email" id="email"
                                                    value="{{ old('email') ?? '' }}" />
                                                <label
                                                    class=" text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block"
                                                    for="email">Email</label>
                                            </div>

                                            @error('email')
                                            <span class="text-tiny+ text-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-4" x-data="{ showPassword: false }">
                                            <div class="form-floating !relative password-field">
                                                <input :type="showPassword ? 'text' : 'password'"
                                                    class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100"
                                                    placeholder="Password" name="password" id="password"
                                                    value="{{ old('password') ?? '' }}" />

                                                <span @click="showPassword = !showPassword"
                                                    class="password-toggle absolute -translate-y-2/4 cursor-pointer text-[0.9rem] text-[#959ca9] right-3 top-2/4">
                                                    <i :class="showPassword ? 'uil uil-eye-slash' : 'uil uil-eye'"></i>
                                                </span>

                                                <label
                                                    class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block"
                                                    for="password">Password</label>
                                            </div>

                                            @error('password')
                                            <span class="text-tiny+ text-error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="flex items-center justify-between">
                                            <p class="!mb-1 font-bold"><a href="{{ route('forgotView') }}"
                                                    class="hover">Forgot Password?</a>
                                            </p>
                                            <button type="submit"
                                                class="btn btn-md btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex justify-end col-span-1">
                                <div class="w-full max-w-sm">
                                    <h2 class="mb-3 text-left">Register</h2>
                                    <p class="lead text-[0.9rem] font-medium !leading-[1.65] !mb-6 text-left">Register
                                        your account and get instant access to the {{ config('app.name') }} Dashboard
                                    </p>

                                    <ul class="pl-0 list-none !mb-5">
                                        <li
                                            class="lead text-[0.85rem] font-medium !leading-[1.65] !mb-2 text-left flex items-center">
                                            <span class="text-[0.9rem] text-[#959ca9]"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                                                </svg></span> Place an order easily
                                        </li>
                                        <li
                                            class="lead text-[0.85rem] font-medium !leading-[1.65] !mb-2 text-left flex items-center">
                                            <span class="text-[0.9rem] text-[#959ca9]"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                                                </svg></span> Direct contact with the voice actor
                                        </li>
                                        <li
                                            class="lead text-[0.85rem] font-medium !leading-[1.65] !mb-2 text-left flex items-center">
                                            <span class="text-[0.9rem] text-[#959ca9]"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                                                </svg></span> Download audio files from previous orders
                                        </li>
                                    </ul>

                                    <div class="flex flex-col gap-2 md:flex-row md:items-center">
                                        <a href="{{ route('register') }}"
                                            class="btn btn-md btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">
                                            Register As Client</a>
                                        <a href="{{ route('registerActor') }}"
                                            class="btn btn-md btn-navy !text-primary !bg-white !border-primary hover:!text-white hover:border-primary hover:!bg-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">
                                            Register As Voice Actor</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
    </section>
</x-landing-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const redirectUrl = localStorage.getItem('redirect_after_login');
        if (redirectUrl) {
            document.getElementById('login-form').action += `?redirect=${encodeURIComponent(redirectUrl)}`;
            localStorage.removeItem('redirect_after_login');
        }
    });
</script>