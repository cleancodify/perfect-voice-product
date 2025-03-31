<x-landing-layout title="Login">
    <section class="wrapper bg-light !bg-[#ffffff] pt-28">
        <div class="container !pb-[4.5rem] pt-28 md:pt-36 xl:!pb-24 lg:!pb-24 md:!pb-24">
            <div class="flex flex-wrap mx-[-15px]">
                <div class="w-full px-[15px] max-w-full !mt-[-10rem]">
                    <div class="!shadow-none card">
                        <div class="card-body md:!p-12 !text-center w-full justify-center flex">
                            <div class="w-full max-w-lg">
                                <h2 class="mb-3 text-left">
                                    {{ isset($success) ? 'Your password change request has been received!' : 'Forgot
                                    password?' }}
                                </h2>
                                <p class="lead text-[0.9rem] font-medium !leading-[1.65] !mb-6 text-left">
                                    {{ isset($success) ? 'If you have an active acount at '. config('app.name') .', We will send
                                    an email within minutes that can be used to create a new password.

                                    ' : 'Enter your email address below. We will send an email within minutes that can
                                    be
                                    used to create a new password.' }}
                                </p>
                                @if(isset($success))
                                    <div class="flex items-center justify-end mt-5">
                                        <a href="{{ route('landing') }}"
                                            class="btn btn-md btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">
                                            Go to homepage
                                        </a>
                                    </div>
                                @else
                                    <form class="text-left !mb-3" action="{{ route('forgot') }}" method="post">
                                        @method('POST') @csrf
                                        <div class="mb-3">
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

                                        <div class="flex items-center justify-end mt-5">
                                            <button type="submit"
                                                class="btn btn-md btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
    </section>
</x-landing-layout>