<x-app-layout title="Application List" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="w-full pb-8 main-content">
        <div class="mt-12 text-center">
            <div class="avatar size-16">
                <div class="text-white rounded-full is-initial bg-gradient-to-br from-pink-500 to-rose-500">
                    <i class="text-2xl fa-solid fa-shapes"></i>
                </div>
            </div>
            <h3 class="mt-3 text-xl font-semibold text-slate-600 dark:text-navy-100">
                Applications
            </h3>
            <p class="mt-0.5 text-base">
                List of my applications on {{ config('app.name') }}
            </p>
        </div>
        <div class="grid w-full max-w-4xl grid-cols-1 gap-4 mx-auto mt-8 sm:grid-cols-2 sm:gap-5 lg:gap-6">
            <div class="p-4 card sm:p-5">
                <div class="avatar size-12">
                    <div class="text-white rounded-full is-initial bg-info">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                </div>
                <h2 class="mt-5 text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    Messages
                </h2>
                <p class="mt-1">
                    Your messages and tasks
                </p>
                <div class="pb-1 mt-5">
                    <a href="{{ route('dashboard/chat') }}"
                        class="border-b border-dashed border-current pb-0.5 font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">View messages</a>
                </div>
            </div>
            <div class="p-4 card sm:p-5">
                <div class="avatar size-12">
                    <div class="text-white rounded-full is-initial bg-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <h2 class="mt-5 text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    Profile
                </h2>
                <p class="mt-1">
                    Your profile setting
                </p>
                <div class="pb-1 mt-5">
                    <a href="{{ route(auth()->user()->role == 'voice_actor' ? 'actorProfileSettingsView' : 'clientProfileSettingsView') }}"
                        class="border-b border-dashed border-current pb-0.5 font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">Update profile</a>
                </div>
            </div>
            <div class="p-4 card sm:p-5">
                <div class="avatar size-12">
                    <div class="text-white rounded-full is-initial bg-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <h2 class="mt-5 text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    Projects
                </h2>
                <p class="mt-1">
                    Your tasks
                </p>
                <div class="pb-1 mt-5">
                    <a href="#"
                        class="border-b border-dashed border-current pb-0.5 font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">View tasks</a>
                </div>
            </div>
        </div>
    </main>
  </x-app-layout>
  