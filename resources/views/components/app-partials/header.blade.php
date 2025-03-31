@php
$user = auth()->user();
$profile = $user->profile;
$photo_src = '/images/avatar.png';
if ($profile && $profile->photo_src) {
$photo_src = $profile->photo_src;
}
$currentRoute = Route::currentRouteName();
@endphp

<nav class="!z-40 header print:hidden !w-full">
    <!-- App Header  -->
    <div class="relative flex w-full bg-white header-container dark:bg-navy-750 print:hidden">
        <!-- Header Items -->
        <div class="flex items-center justify-between w-full lg:px-[250px]">
            <!-- Left: Sidebar Toggle Button -->
            {{-- <div class="size-7">
                <button
                    class="menu-toggle ml-0.5 flex size-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
                    :class="$store.global.isSidebarExpanded && 'active'"
                    @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div> --}}

            <div class="navbar-brand">
                <a href="/">
                    <img width="150" src="/images/logo-white.png" alt="image">
                </a>
            </div>

            <!-- Right: Header buttons -->
            <div class="-mr-1.5 flex items-center space-x-2">
                <!-- Mobile Search Toggle -->
                <button @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive"
                    class="p-0 rounded-full btn size-8 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5 text-slate-500 dark:text-navy-100"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                <div x-data="usePopper({ placement: 'bottom-end', offset: 12 })"
                    @click.outside="if(isShowPopper) isShowPopper = false" class="flex">
                    <button @click="isShowPopper = !isShowPopper" x-ref="popperRef"
                        class="border border-gray-200 rounded-full avatar size-12">
                        <img class="rounded-full" src="{{ asset($photo_src) }}" alt="avatar" />
                        <span
                            class="absolute right-0 size-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"></span>
                    </button>
                    <div :class="isShowPopper && 'show'" class="fixed popper-root" x-ref="popperRoot">
                        <div
                            class="w-64 bg-white border rounded-lg popper-box border-slate-150 shadow-soft dark:border-navy-600 dark:bg-navy-700">
                            <div
                                class="flex items-center px-4 py-5 space-x-4 rounded-t-lg bg-slate-100 dark:bg-navy-800">
                                <div class="avatar size-14">
                                    <img class="rounded-full" src="{{ asset($photo_src) }}" alt="avatar" />
                                </div>
                                <div>
                                    <a href="#"
                                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                        {{ $user->first_name ." ". $user->last_name }}
                                    </a>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        {{ $user->role == "voice_actor" ? 'Voice Actor' : 'Client' }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col pt-2 pb-5">
                                <a href="{{ route('dashboard') }}"
                                    class="flex items-center px-4 py-2 space-x-3 tracking-wide transition-all outline-none group hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                    <div
                                        class="flex items-center justify-center text-white rounded-lg size-8 bg-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>

                                    <div>
                                        <h2
                                            class="font-medium transition-colors text-slate-700 group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                            Dashboard
                                        </h2>
                                        <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                            list applications
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route(auth()->user()->role == 'voice_actor' ? 'actorProfileSettingsView' : 'clientProfileSettingsView') }}"
                                    class="flex items-center px-4 py-2 space-x-3 tracking-wide transition-all outline-none group hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                    <div
                                        class="flex items-center justify-center text-white rounded-lg size-8 bg-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>

                                    <div>
                                        <h2
                                            class="font-medium transition-colors text-slate-700 group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                            Profile
                                        </h2>
                                        <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                            Your profile setting
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('dashboard/chat') }}"
                                    class="flex items-center px-4 py-2 space-x-3 tracking-wide transition-all outline-none group hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                    <div class="flex items-center justify-center text-white rounded-lg size-8 bg-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                    </div>

                                    <div>
                                        <h2
                                            class="font-medium transition-colors text-slate-700 group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                            Messages
                                        </h2>
                                        <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                            Your messages and tasks
                                        </div>
                                    </div>
                                </a>
                                <div class="px-4 mt-3">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="w-full space-x-2 text-white btn h-9 bg-primary hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <span>Logout</span>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>