@php
    $profile = $client->profile;
    $photo_src = '/images/avatar.png';
    if ($profile && $profile->photo_src) {
        $photo_src = $profile->photo_src;
    }
@endphp

<x-app-layout title="Form Layout v5" is-header-blur="true">
    <main class="main-content w-full sm:px-[4px] lg:px-[310px] py-8" x-data="profileFormHandler()">

        <div x-show="alert.show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            :class="alert.type === 'success' ? 'bg-green-400 text-white' : 'bg-red-400 text-white'"
            class="fixed top-0 left-0 z-40 flex justify-center w-full px-4 py-4 alert sm:px-5">
            <span x-text="alert.message"></span>
        </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <x-app-partials.actor-profile-nav></x-app-partials.actor-profile-nav>

            <div class="col-span-12 lg:col-span-8">
                <div class="card">
                    <form @submit.prevent="submitForm" enctype="multipart/form-data">
                        <div
                            class="flex flex-col items-center p-4 space-y-4 border-b border-slate-200 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                            <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Account Setting
                            </h2>
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('dashboard') }}"
                                    class="btn min-w-[7rem] rounded-md border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                    Cancel
                                </a>
                                <button type="submit" x-bind:disabled="loading"
                                    class="btn min-w-[7rem] rounded-md bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 flex items-center justify-center">
                                    <svg x-show="loading" class="w-5 h-5 mr-2 animate-spin" fill="none"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                            stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                    </svg>
                                    <span x-text="loading ? 'Saving...' : 'Save'"></span>
                                </button>
                            </div>
                        </div>
                        <div class="p-4 sm:p-5">
                            <div class="flex flex-col">
                                <span class="text-base font-medium text-slate-600 dark:text-navy-100">Profile
                                    photo</span>
                                <div class="flex justify-center">
                                    <div class="avatar mt-1.5 size-40 relative">
                                        <img class="mask is-squircle" :src="previewImage" alt="avatar" />
                                        <div
                                            class="absolute bottom-0 right-0 flex items-center justify-center bg-white rounded-full dark:bg-navy-700">
                                            <label
                                                class="relative p-0 border rounded-full btn size-10 border-slate-200 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:border-navy-500 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <input type="file" @change="handleFileUpload"
                                                    class="absolute inset-0 w-full h-full opacity-0 pointer-events-none" />
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-px my-7 bg-slate-200 dark:bg-navy-500"></div>
                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                                <label class="block">
                                    <span class="text-base font-medium text-slate-600 dark:text-navy-100">First
                                        name</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-model="formData.first_name" name="first_name"
                                            class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter name" type="text" />
                                        <span
                                            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="text-base fa-regular fa-user"></i>
                                        </span>
                                    </span>

                                    <span class="text-sm text-error" x-text="errors.first_name"></span>
                                </label>
                                <label class="block">
                                    <span class="text-base font-medium text-slate-600 dark:text-navy-100">Last Name
                                    </span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-model="formData.last_name" name="last_name"
                                            class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter full name" type="text" />
                                        <span
                                            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="text-base fa-regular fa-user"></i>
                                        </span>
                                    </span>

                                    <span class="text-sm text-error" x-text="errors.last_name"></span>
                                </label>
                                <label class="block">
                                    <span class="text-base font-medium text-slate-600 dark:text-navy-100">Email Address
                                    </span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-model="formData.email" name="email"
                                            class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter email address" type="text" />
                                        <span
                                            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="text-base fa-regular fa-envelope"></i>
                                        </span>
                                    </span>

                                    <span class="text-sm text-error" x-text="errors.email"></span>
                                </label>

                                <div class="grid gap-4 md:grid-cols-2 sm:col-span-2">
                                    <label class="block">
                                        <span
                                            class="text-base font-medium text-slate-600 dark:text-navy-100">Country</span>
                                        <span class="relative mt-1.5 flex">
                                            <select x-model="formData.country_code" name="country_code"
                                                class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-select form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                                                <option disabled value="">Select your country</option>
                                                @foreach ($countries as $country)
                                                <option {{ $country->code == $profile->country_code ? 'selected' : '' }}
                                                    value="{{
                                                    $country->code }}">{{ $country->name }} (+{{$country->phone_code}})</option>
                                                @endforeach
                                            </select>
                                        </span>
    
                                        <span class="text-sm text-error" x-text="errors.country_code"></span>
                                    </label>
                                    <label class="block">
                                        <span class="text-base font-medium text-slate-600 dark:text-navy-100">Phone
                                            Number</span>
                                        <span class="relative mt-1.5 flex">
                                            <input x-model="formData.phone" name="phone"                                            
                                                @input="formatPhone"
                                                class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter phone number" type="text" />
                                            <span
                                                class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </span>
    
                                        <span class="text-sm text-error" x-text="errors.phone"></span>
                                    </label>
                                </div>
                                                            
                                
                                <div class="border-b border-slate-300 sm:col-span-2"></div>

                                <label class="block">
                                    <span class="text-base font-medium text-slate-600 dark:text-navy-100">Billing address</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-model="formData.billing_address" name="billing_address"
                                            class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter billing address" type="text" />
                                        <span
                                            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="text-base fa-solid fa-location-dot"></i>
                                        </span>
                                    </span>

                                    <span class="text-sm text-error" x-text="errors.billing_address"></span>
                                </label>

                                <label class="block">
                                    <span class="text-base font-medium text-slate-600 dark:text-navy-100">Address</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-model="formData.address" name="address"
                                            class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter address" type="text" />
                                        <span
                                            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="text-base fa-solid fa-location-dot"></i>
                                        </span>
                                    </span>

                                    <span class="text-sm text-error" x-text="errors.address"></span>
                                </label>

                                <label class="block">
                                    <span class="text-base font-medium text-slate-600 dark:text-navy-100">City</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-model="formData.city" name="city"
                                            class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter city" type="text" />
                                        <span
                                            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="text-base fa-solid fa-city"></i>
                                        </span>
                                    </span>

                                    <span class="text-sm text-error" x-text="errors.city"></span>
                                </label>

                                <label class="block">
                                    <span class="text-base font-medium text-slate-600 dark:text-navy-100">State</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-model="formData.state" name="state"
                                            class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter state" type="text" />
                                    </span>

                                    <span class="text-sm text-error" x-text="errors.state"></span>
                                </label>

                                <label class="block">
                                    <span class="text-base font-medium text-slate-600 dark:text-navy-100">Zip</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-model="formData.zip" name="zip"
                                            class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter zip code" type="text" />
                                    </span>

                                    <span class="text-sm text-error" x-text="errors.zip"></span>
                                </label>

                                <div class="grid gap-4 sm:col-span-2 md:grid-cols-2">
                                    <label class="block">
                                        <span class="text-base font-medium text-slate-600 dark:text-navy-100">Company name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input x-model="formData.company_name" name="company_name"
                                                class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter company name" type="text" />
                                        </span>
    
                                        <span class="text-sm text-error" x-text="errors.company_name"></span>
                                    </label>
                                    <label class="block">
                                        <span class="text-base font-medium text-slate-600 dark:text-navy-100">Company website</span>
                                        <span class="relative mt-1.5 flex">
                                            <input x-model="formData.company_website" name="company_website"
                                                class="w-full px-3 py-2 text-base bg-transparent border rounded-md form-input peer border-slate-300 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter company website" type="text" />
                                        </span>
    
                                        <span class="text-sm text-error" x-text="errors.company_website"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

<script>
    function profileFormHandler() {
        return {
            previewImage: "{{ asset($photo_src) }}", // Default profile photo
            loading: false, // Loading state
            formData: {
                first_name: '{{ $client->first_name }}',
                last_name: '{{ $client->last_name }}',
                email: '{{ $client->email }}',
                phone: '{{ $client->phone }}',
                country_code: '{{ $profile->country_code }}',
                billing_address: '{{ $profile->billing_address }}',
                address: '{{ $profile->address }}',
                city: '{{ $profile->city }}',
                state: '{{ $profile->state }}',
                zip: '{{ $profile->zip }}',
                company_name: '{{ $profile->company_name }}',
                company_website: '{{ $profile->company_website }}',
                profile_photo: "",
                _token: document.querySelector('meta[name=\'csrf-token\']').content
            },
            alert: {
                show: false,
                type: 'success', // success or error
                message: ''
            },
            errors: {},
            async submitForm() {
                this.loading = true; // Show loader
                let form = new FormData();
                Object.entries(this.formData).forEach(([key, value]) => {
                    if (Array.isArray(value)) {
                        value.forEach((v, index) => {
                            form.append(`${key}[${index}]`, v); // Append with array notation
                        });
                    } else {
                        form.append(key, value);
                    }
                })

                try {
                    const data = await fetch('{{ route('clientProfileSettings') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': this.formData._token
                        },
                        body: form
                    }).then(res => res.json());

                    if (data.errors) {
                        this.alert.type = 'error';
                        this.alert.message = data.message || 'Something went wrong!';
                        this.errors = data.errors;
                    } else {
                        this.alert.type = 'success';
                        this.alert.message = 'Profile updated successfully!';
                        this.errors = {};
                    }
                } catch (error) {
                    this.alert.type = 'error';
                    this.alert.message = 'An error occurred!';
                } finally {
                    this.alert.show = true;
                    this.loading = false;

                    setTimeout(() => { this.alert.show = false; }, 3000);
                }
            },
            handleFileUpload(event) {
                const file = event.target.files[0];
                if (file) {
                    this.formData.profile_photo = file;
                    this.previewImage = URL.createObjectURL(file); // Create a temporary preview
                }
            },
            toggleSelection(id) {
                if (this.formData.voice_specials.includes(id)) {
                    this.formData.voice_specials = this.formData.voice_specials.filter(item => item !== id);
                } else {
                    this.formData.voice_specials.push(id);
                }
            },
            isSelected(id) {
                return this.formData.voice_specials.includes(id);
            },
            isValid() {
                return this.formData.voice_specials.length >= 3;
            },
            formatPhone() {
                // Remove all non-numeric characters from the input
                let numbers = this.formData.phone.replace(/\D/g, '');

                // Limit to only the first 10 digits (assuming US-style numbers)
                numbers = numbers.slice(0, 10);

                // Format the phone number as xxx-xxx-xxxx
                let formattedPhone = numbers.replace(/^(\d{3})(\d{3})(\d{4})$/, (match, p1, p2, p3) => {
                    return `${p1}-${p2}-${p3}`;
                });

                // Set the formatted phone number
                this.formData.phone = formattedPhone;
            }
        };
    }
</script>