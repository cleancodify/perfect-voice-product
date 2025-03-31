@php
$request = request();
@endphp

<x-landing-layout title="Login">
    <section class="wrapper bg-light !bg-[#ffffff] pt-28">
        <div class="container !pb-[4.5rem] pt-28 md:pt-36 xl:!pb-24 lg:!pb-24 md:!pb-24">
            <div class="flex flex-wrap mx-[-15px]">
                <div class="w-full px-[15px] max-w-full !mt-[-10rem]">
                    <div class="!shadow-none card">
                        <div class="card-body p-0 md:!p-12 !text-center w-full">
                            <h2 class="mb-3 text-left">
                                Registration
                            </h2>
                            <p class="lead text-[0.9rem] font-medium !leading-[1.65] !mb-6 text-left">
                                You get instant access to the {{ config('app.name') }} Dashboard and can place an order
                                immediately!
                            </p>
                            <form class="text-left !mb-3 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8"
                                action="{{ route('register') }}" method="post" x-data="{ showPassword: false }">
                                @method('POST') @csrf
                                <input type="hidden" name="role" value="client">
                                <div>
                                    <div class="form-floating !relative">
                                        <input type="text" placeholder="First name" name="first_name" id="first_name"
                                            class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0" />
                                        <label for="first_name"
                                            class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                            First name
                                        </label>
                                    </div>
                                    @error('first_name')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <div class="form-floating !relative">
                                        <input type="text" placeholder="Last name" name="last_name" id="last_name"
                                            class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0" />
                                        <label for="last_name"
                                            class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                            Last name
                                        </label>
                                    </div>
                                    @error('last_name')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <div class="form-floating !relative">
                                        <input type="email" placeholder="Email address" name="email" id="email"
                                            autocomplete="off"
                                            class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                        <label for="email"
                                            class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                            Email address
                                        </label>
                                    </div>
                                    @error('email')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="grid gap-4 md:col-span-2 md:grid-cols-2 md:gap-8">
                                    <div class="form-select-wrapper">
                                        <select class="form-select" name="country_code" required>
                                            <option disabled value="">Select your country</option>
                                            @foreach ($countries as $country)
                                            <option {{ $country->code == $request->old('country_code', 'US') ?
                                                'selected' : '' }} value="{{$country->code }}">
                                                {{ $country->name }} (+{{$country->phone_code}})
                                            </option>
                                            @endforeach
                                        </select>

                                        @error('country_code')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div x-data="phoneFormatter()">
                                        <div class="col-span-1 form-floating !relative">
                                            <input type="text" placeholder="Phone number" name="phone" id="phone"
                                                value="{{ old('phone') }}" x-model="phone" @input="formatPhone"
                                                class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                            <label for="phone"
                                                class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                                Phone number
                                            </label>
                                        </div>

                                        @error('phone')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-floating !relative password-field">
                                        <input :type="showPassword ? 'text' : 'password'" placeholder="Password"
                                            name="password" id="password" autocomplete="off"
                                            class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100">

                                        <!-- Toggle Visibility Icon -->
                                        <span @click="showPassword = !showPassword"
                                            class="password-toggle absolute -translate-y-2/4 cursor-pointer text-[0.9rem] text-[#959ca9] right-3 top-2/4">
                                            <i :class="showPassword ? 'uil uil-eye-slash' : 'uil uil-eye'"></i>
                                        </span>

                                        <label for="password"
                                            class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">Password</label>
                                    </div>
                                    @error('password')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <div class="form-floating !relative password-field">
                                        <input :type="showPassword ? 'text' : 'password'" placeholder="Repeat Password"
                                            name="password_confirmation" id="password_confirm"
                                            class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100">

                                        <!-- Toggle Visibility Icon (Same as above, controlled by the same Alpine state) -->
                                        <span @click="showPassword = !showPassword"
                                            class="password-toggle absolute -translate-y-2/4 cursor-pointer text-[0.9rem] text-[#959ca9] right-3 top-2/4">
                                            <i :class="showPassword ? 'uil uil-eye-slash' : 'uil uil-eye'"></i>
                                        </span>

                                        <label for="password_confirm"
                                            class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">Repeat
                                            Password</label>
                                    </div>
                                    @error('password_confirm')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="border-b divide-y  md:col-span-2 border-b-gray-300">
                                </div>

                                <div>
                                    <div class="col-span-1 form-floating !relative">
                                        <input type="text" placeholder="Company name" name="billing_address"
                                            id="billing_address" value="{{ old('billing_address') }}"
                                            class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                        <label for="billing_address"
                                            class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                            Billing address
                                        </label>
                                    </div>
                                    @error('billing_address')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <div class="col-span-1 form-floating !relative">
                                        <input type="text" placeholder="City" name="address" id="address"
                                            value="{{ old('address') }}"
                                            class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                        <label for="address"
                                            class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                            Address
                                        </label>
                                    </div>
                                    @error('address')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="grid gap-4 md:grid-cols-3 md:gap-8 md:col-span-2">
                                    <div>
                                        <div class="col-span-1 form-floating !relative">
                                            <input type="text" placeholder="City" name="city" id="city"
                                                value="{{ old('city') }}"
                                                class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                            <label for="city"
                                                class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                                City
                                            </label>
                                        </div>
                                        @error('city')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <div class="col-span-1 form-floating !relative">
                                            <input type="text" placeholder="State (or province)" name="state" id="state"
                                                value="{{ old('state') }}"
                                                class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                            <label for="state"
                                                class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                                State
                                            </label>
                                        </div>
                                        @error('state')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <div class="col-span-1 form-floating !relative">
                                            <input type="text" placeholder="Zip" name="zip" id="zip"
                                                value="{{ old('zip') }}"
                                                class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                            <label for="zip"
                                                class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                                Zip
                                            </label>
                                        </div>
                                        @error('zip')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="grid gap-4 md:col-span-2 md:grid-cols-2 md:gap-8">
                                    <div>
                                        <div class="col-span-1 form-floating !relative">
                                            <input type="text" placeholder="Company name" name="company_name"
                                                id="company_name" value="{{ old('company_name') }}"
                                                class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                            <label for="company_name"
                                                class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                                Company name
                                            </label>
                                        </div>
                                        @error('company_name')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <div class="col-span-1 form-floating !relative">
                                            <input type="text" placeholder="company_website" name="company_website"
                                                id="company_website" value="{{ old('company_website') }}"
                                                class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-primary focus-visible:!border-primary focus-visible:!outline-0">
                                            <label for="company_website"
                                                class="text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block">
                                                Company website
                                            </label>
                                        </div>
                                        @error('company_website')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="flex justify-end md:col-span-2">
                                    <button type="submit"
                                        class="btn btn-md btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded  !mb-0 whitespace-nowrap">
                                        Register
                                    </button>
                                </div>
                            </form>
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
    function phoneFormatter() {
        var countryCodes = @json($countries);
        return {
            phone: '',
            countryCode: '+1', // Default country code
            countryCodes,
            formatPhone() {
                // Remove all non-numeric characters from the input
                let numbers = this.phone.replace(/\D/g, '');

                // Limit to only the first 10 digits (assuming US-style numbers)
                numbers = numbers.slice(0, 10);

                // Format the phone number as xxx-xxx-xxxx
                let formattedPhone = numbers.replace(/^(\d{3})(\d{3})(\d{4})$/, (match, p1, p2, p3) => {
                    return `${p1}-${p2}-${p3}`;
                });

                // Set the formatted phone number
                this.phone = formattedPhone;
            }
        };
    }


</script>