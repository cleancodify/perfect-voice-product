<div class="sidebar-panel pt-14">
    <div class="flex flex-col h-full pl-3 bg-white grow dark:bg-navy-750">
        <!-- Sidebar Panel Header -->
        <div class="flex items-center justify-between w-full pl-4 pr-1 h-18">
            <p class="text-base tracking-wider text-slate-800 dark:text-navy-100">
                John Collins
            </p>
            <button @click="$store.global.isSidebarExpanded = false"
                class="p-0 rounded-full btn size-7 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        </div>

        <!-- Sidebar Panel Body -->
        <div class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6" x-data="{ expandedItem: null }" x-init="$el._x_simplebar = new SimpleBar($el);">
            <div class="h-px mx-4 my-3 bg-slate-200 dark:bg-navy-500"></div>
            <ul class="flex flex-col flex-1 px-4 font-inter">
                <li>
                    <a href="#"
                        class="flex text-xs+ py-2  tracking-wide outline-none transition-colors duration-300 ease-in-out {{ 'dashboard' === $pageName ? 'text-primary dark:text-accent-light font-medium' : 'text-slate-600  hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50' }}">
                        Dashboard
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
