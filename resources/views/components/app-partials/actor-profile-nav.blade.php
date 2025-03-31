@php
    $authUser = auth()->user();
    $profile = $authUser->profile;
    $photo_src = '/images/avatar.png';
    if ($profile && $profile->photo_src) {
        $photo_src = $profile->photo_src;
    }
    $currentRoute = Route::currentRouteName();
@endphp

<div class="col-span-12 lg:col-span-4">
    <div class="p-4 card sm:p-5">
        <div class="flex items-center space-x-4">
            <div class="avatar size-14">
                <img class="rounded-full" src="{{ asset($photo_src) }}" alt="avatar" />
            </div>
            <div>
                <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                    {{ $authUser->first_name ." ". $authUser->last_name }}
                </h3>
                <p class="text-xs+">{{ $authUser->role == "voice_actor" ? 'Voice Actor' : 'Client' }}</p>
            </div>
        </div>
        <ul class="mt-6 space-y-1.5 font-inter font-medium">
            <li>
                <a class="flex items-center space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                    {{ $currentRoute == 'actorProfileSettingsView' || $currentRoute == 'clientProfileSettingsView' ? 'bg-primary text-white dark:bg-accent' : 'hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100' }}"
                    href="{{ route(auth()->user()->role == 'voice_actor' ? 'actorProfileSettingsView' : 'clientProfileSettingsView') }}">
                    <i class="fa-solid fa-user"></i>
                    <span>Account</span>
                </a>
            </li>

            @if(auth()->user()->role == "voice_actor")
            <li>
                <a class="flex items-center space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                                {{ $currentRoute == 'actorPortfolioSettingsView' ? 'bg-primary text-white dark:bg-accent' : 'hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100' }}"
                    href="{{ route('actorPortfolioSettingsView') }}">
                    <i class="fa-solid fa-briefcase"></i>
                    <span>Portfolio</span>
                </a>
            </li>
            @endif

        </ul>
    </div>
</div>