<x-app-layout title="Chat App" is-sidebar-open="true" has-min-sidebar="true">
    <div class="flex min-h-100vh grow bg-slate-50 dark:bg-navy-900" x-data="chatApp()">

        <!-- Sidebar -->
        <div class="sidebar print:hidden">
            <div class="pt-16 sidebar-panel">
                <div class="flex flex-col h-full bg-white grow dark:bg-navy-750">
                    <!-- Sidebar Panel Header -->
                    <div class="flex items-center justify-between w-full pl-4 pr-1 h-18">
                        <div class="flex items-center">
                            <div class="hidden mr-3 avatar size-9 lg:flex">
                                <div
                                    class="rounded-full is-initial bg-primary/10 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                </div>
                            </div>
                            <p
                                class="text-lg font-medium tracking-wider text-slate-800 line-clamp-1 dark:text-navy-100">
                                Chat
                            </p>
                        </div>

                        <button @click="$store.global.isSidebarExpanded = false"
                            class="p-0 rounded-full btn size-7 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>

                    </div>

                    <!-- Sidebar Panel Body -->
                    <div class="flex h-[calc(100%-4.5rem)] grow flex-col">
                        <div class="flex px-4 mt-4">
                            <label class="relative mr-1.5 flex">
                                <input
                                    class="form-input peer h-8 w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 text-xs+ ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                    placeholder="Search chats" type="text" />
                                <span
                                    class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="transition-colors duration-200 size-4" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                    </svg>
                                </span>
                            </label>

                            <button
                                class="p-0 -mr-2 rounded-full btn size-8 shrink-0 text-slate-500 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:text-navy-200 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        d="M22 6.5h-9.5M6 6.5H2M9 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM22 17.5h-6M9.5 17.5H2M13 20a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-col mt-3 overflow-y-auto is-scrollbar-hidden grow">
                            @foreach($contacts as $key => $contact)
                            @php
                            $contactUser = $contact->contactUser;
                            $profile = $contactUser->profile;
                            $photo_src = '/images/avatar.png';
                            if ($profile->photo_src) {
                            $photo_src = $profile->photo_src;
                            }
                            @endphp
                            <div x-init="watchUserStatus('{{ $contactUser->id }}'); fetchLastMessage('{{ $contact->chat_id }}')"
                                data-chat-id="{{ $contact->chat_id }}"
                                class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600 relative"
                                :class="{'bg-slate-150': activeChat === '{{ $contact->chat_id }}'}"
                                @click="selectChat({{ $contact->toJson() }})">
                                <!-- Avatar with online status -->
                                <div class="relative avatar -10">
                                    <img class="rounded-full" src="{{ asset($photo_src) }}" alt="avatar" />
                                    <div class="absolute bottom-0 right-0 border-2 border-white rounded-full size-3"
                                        :class="onlineUsers.includes('{{ $contactUser->id }}') ? 'bg-green-500' : 'bg-gray-400'">
                                    </div>
                                </div>

                                <!-- User details -->
                                <div class="flex flex-col flex-1">
                                    <div class="flex items-baseline justify-between space-x-1.5">
                                        <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                            {{ $contactUser->first_name }} {{ $contactUser->last_name }}
                                        </p>
                                        {{-- <span class="text-tiny+ text-slate-400 dark:text-navy-300"
                                            x-text="lastMessages['{{ $contact->chat_id }}']?.created_at ?? ''"></span>
                                        --}}
                                    </div>
                                    <div class="flex items-center justify-between mt-1 space-x-1">
                                        <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300"
                                            x-text="lastMessages['{{ $contact->chat_id }}']?.message ?? ''"></p>
                                    </div>
                                </div>

                                <div class="absolute top-2 right-3">
                                    <span x-show="unreadCount > 0" x-text="unreadCount"
                                        class="inline-flex items-center justify-center w-5 h-5 text-xs text-white bg-red-500 rounded-full">
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Minimized Sidebar Panel -->
            <div class="pt-16 sidebar-panel-min">
                <div class="flex flex-col h-full bg-white dark:bg-navy-750">
                    <div class="flex items-center justify-center h-18 shrink-0">
                        <div class="flex avatar size-10">
                            <div
                                class="rounded-full is-initial bg-primary/10 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex h-[calc(100%-4.5rem)] grow flex-col">
                        <div class="flex flex-col overflow-y-auto is-scrollbar-hidden grow">
                            <div class="flex flex-col">
                                @foreach($contacts as $key => $contact)
                                @php
                                $contactUser = $contact->contactUser;
                                $profile = $contactUser->profile;
                                $photo_src = '/images/avatar.png';
                                if ($profile->photo_src) {
                                $photo_src = $profile->photo_src;
                                }
                                @endphp
                                <div x-init="watchUserStatus('{{ $contactUser->id }}'); fetchLastMessage('{{ $contact->chat_id }}')"
                                    data-chat-id="{{ $contact->chat_id }}"
                                    class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600"
                                    :class="{'bg-slate-150': activeChat === '{{ $contact->chat_id }}'}"
                                    @click="selectChat({{ $contact->toJson() }})">
                                    <!-- Avatar with online status -->
                                    <div class="avatar size-10">
                                        <img class="rounded-full" src="{{ asset($photo_src) }}" alt="avatar" />
                                        <div class="absolute bottom-0 right-0 border-2 border-white rounded-full size-3"
                                            :class="onlineUsers.includes('{{ $contactUser->id }}') ? 'bg-green-500' : 'bg-gray-400'">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Main Content Wrapper -->
        <main x-effect="$store.breakpoints.mdAndDown === true && (isShowChatInfo = false)"
            class="flex flex-col w-full mt-16 main-content chat-app"
            :class="{ 'lg:mr-80': isShowChatInfo, 'md:pl-16': !$store.global.isSidebarExpanded }"
            @change-active-chat.window="activeChat=$event.detail">
            <div x-show="activeChat"
                class="chat-header h-[61px] border-b border-slate-150 dark:border-navy-700 relative z-10 flex w-full shrink-0 items-center justify-between bg-white px-[calc(var(--margin-x)-.5rem)] shadow-sm transition-[padding,width] duration-[.25s] dark:bg-navy-800">
                <div class="flex items-center space-x-5">
                    <div class="ml-1 size-7">
                        <button
                            class="menu-toggle ml-0.5 flex size-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
                            :class="$store.global.isSidebarExpanded && 'active'"
                            @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div @click="isShowChatInfo = true" class="flex items-center space-x-4 cursor-pointer font-inter">
                        <div>
                            <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                                x-text="contactProject ? contactProject.name : ''"></p>


                            <!-- Typing Indicator -->
                            <div x-show="typingUsers.includes(contactUser?.id)"
                                class="flex items-center space-x-2 text-xs text-gray-500 mt-0.5 ">
                                <div class="flex space-x-1">
                                    <span class="bg-green-500 rounded-full message-dot size-1"></span>
                                    <span class="delay-150 bg-green-500 rounded-full message-dot size-1"></span>
                                    <span class="delay-300 bg-green-500 rounded-full message-dot size-1"></span>
                                </div>
                                <p>
                                    <span>typing</span>
                                </p>
                            </div>

                            <p x-show="!typingUsers.includes(contactUser?.id)" class="mt-0.5 text-xs text-gray-500">
                                <span
                                    x-text="onlineUsers.includes(String(contactUser?.id)) ? 'Online' : lastSeen ? 'Last seen at ' + lastSeen : 'Offline'"></span>
                            </p>


                        </div>
                    </div>
                </div>
                <div class="flex items-center -mr-1">
                    <a :href="'/projects-management/' + contactProjectId"
                        x-show="contactProjectId !== null && authUser.role === 'client'"
                        class="p-0 rounded-full text-primary btn size-9 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5.5" fill="currentColor"
                            class="size-6">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                            <path
                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                        </svg>
                    </a>

                    <button @click="isShowChatInfo = !isShowChatInfo"
                        :class="isShowChatInfo ? 'text-primary dark:text-accent-light' : 'text-slate-500 dark:text-navy-200'"
                        class="hidden p-0 rounded-full btn size-9 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.25 21.167h5.5c4.584 0 6.417-1.834 6.417-6.417v-5.5c0-4.583-1.834-6.417-6.417-6.417h-5.5c-4.583 0-6.417 1.834-6.417 6.417v5.5c0 4.583 1.834 6.417 6.417 6.417ZM13.834 2.833v18.334" />
                        </svg>
                    </button>
                </div>
            </div>

            <div x-show="activeChat" x-ref="messagesContainer" :class="$store.breakpoints.smAndUp && 'scrollbar-sm'"
                class="grow overflow-y-auto px-[calc(var(--margin-x)-.5rem)] py-5 transition-all duration-[.25s]">
                <div x-transition:enter="transition-all duration-500 easy-in-out"
                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="space-y-5">

                    <div
                        class="px-5 py-3 bg-white border-l-8 border-green-500 border-solid shadow-md border-1 rounded-2xl text-slate-700">
                        <div class="flex items-center justify-between">
                            <h2 class="mb-3 text-lg font-semibold" x-text="contactProject.name"></h2>
                            <div class="flex items-center">
                                <span class="text-tiny+ text-slate-500 mr-1">Deadline:</span>
                                <p class="text-sm"
                                    x-text="new Date(contactProject.deadline).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' })">
                                </p>
                            </div>

                        </div>

                        <div class="grid md:grid-cols-3">
                            <div>
                                <h3 class="mb-1 text-sm+ font-semibold">Medium</h3>
                                <p class="mb-2" x-text="contactProject.medium"></p>
                            </div>
                            <div>
                                <h3 class="mb-1 text-sm+ font-semibold">Tone voice</h3>
                                <p class="mb-2" x-text="contactProject.tone_voice"></p>
                            </div>
                            <div>
                                <h3 class="mb-1 text-sm+ font-semibold">Amount of words</h3>
                                <p class="mb-2" x-text="contactProject.amount_words"></p>
                            </div>
                        </div>

                        <h3 class="mb-1 text-sm+ font-semibold">Instruction</h3>
                        <p class="" x-text="contactProject.instruction"></p>
                    </div>

                    <template x-for="msg in messages">
                        <div>
                            <!-- Incoming Message (Other User) -->
                            <div x-show="msg.sender_id != authUser.id"
                                class="flex items-start space-x-2.5 sm:space-x-5">
                                <div class="avatar">
                                    <img class="rounded-full" :src="contactUserPhoto" alt="avatar" />
                                </div>

                                <div class="flex flex-col items-start space-y-3.5">
                                    <div class="max-w-lg mr-4 sm:mr-10">
                                        <!-- Text Message -->
                                        <template x-if="msg.message">
                                            <div x-text="msg.message"
                                                class="p-3 bg-white rounded-tl-none shadow-sm rounded-2xl text-slate-700 dark:bg-navy-700 dark:text-navy-100">
                                            </div>
                                        </template>

                                        <!-- File Message -->
                                        <template x-if="msg.file_url">
                                            <div
                                                class="p-3 bg-white rounded-tl-none shadow-sm rounded-2xl text-slate-700 dark:bg-navy-700 dark:text-navy-100">
                                                <template x-if="msg.file_type.startsWith('image/')">
                                                    <img :src="msg.file_url" class="max-w-xs rounded-lg"
                                                        alt="Sent Image">
                                                </template>

                                                <template x-if="msg.file_type.startsWith('audio/')">
                                                    <audio controls>
                                                        <source :src="msg.file_url" :type="msg.file_type">
                                                        Your browser does not support the audio tag.
                                                    </audio>
                                                </template>

                                                <template
                                                    x-if="!msg.file_type.startsWith('image/') && !msg.file_type.startsWith('audio/')">
                                                    <a :href="msg.file_url" target="_blank"
                                                        class="underline text-primary">
                                                        Download File
                                                    </a>
                                                </template>
                                            </div>
                                        </template>

                                        <!-- Timestamp -->
                                        <p x-text="msg.created_at ? new Date((msg.created_at?.seconds ?? 0) * 1000).toLocaleString('en-US', {
                                            year: 'numeric',
                                            month: 'short',
                                            day: 'numeric',
                                            hour: '2-digit',
                                            minute: '2-digit',
                                            hour12: true  }) : ''"
                                            class="mt-1 ml-auto text-xs text-right text-slate-400 dark:text-navy-300">
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Outgoing Message (Auth User) -->
                            <div x-show="msg.sender_id == authUser.id"
                                class="flex items-start justify-end space-x-2.5 sm:space-x-5">
                                <div class="flex flex-col items-end space-y-3.5">
                                    <div class="max-w-lg ml-4 md:ml-10">
                                        <!-- Text Message -->
                                        <template x-if="msg.message">
                                            <div x-text="msg.message"
                                                class="p-3 rounded-tr-none shadow-sm rounded-2xl bg-primary/10 text-slate-700 dark:bg-accent dark:text-white">
                                            </div>
                                        </template>

                                        <!-- File Message -->
                                        <template x-if="msg.file_url">
                                            <div
                                                class="p-3 rounded-tr-none shadow-sm rounded-2xl bg-primary/10 text-slate-700 dark:bg-accent dark:text-white">
                                                <template x-if="msg.file_type.startsWith('image/')">
                                                    <img :src="msg.file_url" class="max-w-xs rounded-lg"
                                                        alt="Sent Image">
                                                </template>

                                                <template x-if="msg.file_type.startsWith('audio/')">
                                                    <audio controls>
                                                        <source :src="msg.file_url" :type="msg.file_type">
                                                        Your browser does not support the audio tag.
                                                    </audio>
                                                </template>

                                                <template
                                                    x-if="!msg.file_type.startsWith('image/') && !msg.file_type.startsWith('audio/')">
                                                    <a :href="msg.file_url" target="_blank"
                                                        class="underline text-primary">
                                                        Download File
                                                    </a>
                                                </template>
                                            </div>
                                        </template>

                                        <!-- Timestamp -->
                                        <p x-text="msg.created_at ? new Date((msg.created_at?.seconds ?? 0) * 1000).toLocaleString('en-US', {
                                            year: 'numeric',
                                            month: 'short',
                                            day: 'numeric',
                                            hour: '2-digit',
                                            minute: '2-digit',
                                            hour12: true  }) : ''"
                                            class="mt-1 ml-auto text-xs text-left text-slate-400 dark:text-navy-300">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                </div>
            </div>

            <div x-show="activeChat"
                class="chat-footer relative flex h-12 w-full shrink-0 items-center justify-between border-t border-slate-150 bg-white px-[calc(var(--margin-x)-.25rem)] transition-[padding,width] duration-[.25s] dark:border-navy-600 dark:bg-navy-800">

                <div class="-ml-1.5 flex flex-1 space-x-2">
                    <!-- File Upload Button -->
                    <button @click="$refs.fileInput.click()"
                        class="p-0 rounded-full btn size-9 shrink-0 text-slate-500 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                    </button>

                    <!-- Hidden File Input -->
                    <input type="file" x-ref="fileInput" @change="handleFileUpload" class="hidden"
                        accept="audio/*, text/plain, application/pdf, image/*">

                    <input type="text" class="w-full bg-transparent form-input h-9 placeholder:text-slate-400/70"
                        placeholder="Write the message" x-model="message" @keydown.enter="sendMessage()"
                        @input="handleTyping()" />
                </div>

                <div class="-mr-1.5 flex">
                    <button @click="sendMessage"
                        class="p-0 rounded-full btn size-9 shrink-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m9.813 5.146 9.027 3.99c4.05 1.79 4.05 4.718 0 6.508l-9.027 3.99c-6.074 2.686-8.553.485-5.515-4.876l.917-1.613c.232-.41.232-1.09 0-1.5l-.917-1.623C1.26 4.66 3.749 2.46 9.813 5.146ZM6.094 12.389h7.341" />
                        </svg>
                    </button>
                </div>
            </div>

            <template x-teleport="#x-teleport-target">
                <div x-data="{
                    get showDrawer() { return $data.isShowChatInfo; },
                    set showDrawer(val) { $data.isShowChatInfo = val; },
                }" x-show="showDrawer" @keydown.window.escape="showDrawer = false">
                    <div class="fixed inset-0 z-[100] bg-slate-900/60 transition-opacity duration-200"
                        @click="showDrawer = false" x-show="showDrawer && $store.breakpoints.mdAndDown"
                        x-transition:enter="ease-out" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                    <div class="fixed top-0 right-0 z-30 w-full h-full pt-16 sm:w-80">
                        <div class="flex flex-col w-full h-full transition-transform duration-200 bg-white border-l border-slate-150 dark:border-navy-600 dark:bg-navy-750"
                            x-show="showDrawer" x-transition:enter="ease-out transform-gpu"
                            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="ease-in transform-gpu" x-transition:leave-start="translate-x-0"
                            x-transition:leave-end="translate-x-full">
                            <div class="flex h-[60px] items-center justify-between p-4">
                                <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                    Chat Info
                                </h3>
                                <div class="-mr-1.5 flex space-x-1">

                                    <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
                                        class="p-0 rounded-full btn size-8 hover:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg x-show="$store.global.isDarkModeEnabled"
                                            x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                                            x-transition:enter-start="scale-75"
                                            x-transition:enter-end="scale-100 static" class="size-6 text-amber-400"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            x-show="!$store.global.isDarkModeEnabled"
                                            x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                                            x-transition:enter-start="scale-75"
                                            x-transition:enter-end="scale-100 static" class="size-6 text-amber-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <button @click="showDrawer=false"
                                        class="p-0 rounded-full btn size-8 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col items-center mt-5">
                                <div class="avatar size-20">
                                    <img class="rounded-full" :src="contactUserPhoto" alt="avatar" />
                                </div>
                                <h3 class="mt-2 text-lg font-medium text-slate-700 dark:text-navy-100"
                                    x-text="contactUserName"></h3>
                                <p x-text="contactUser?.role == 'voice_actor' ? 'Voice Actor' : 'Client'"></p>
                            </div>
                            <div x-data="{ activeTab: 'tabFiles' }" class="flex flex-col mt-6 tabs">
                                <div class="px-4 overflow-x-auto is-scrollbar-hidden">
                                    <div class="flex tabs-list">
                                        {{-- <button @click="activeTab = 'tabImages'"
                                            :class="activeTab === 'tabImages' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="px-3 py-2 font-medium border-b-2 rounded-none btn shrink-0">
                                            Portfolio Audios
                                        </button> --}}
                                        <button @click="activeTab = 'tabFiles'"
                                            :class="activeTab === 'tabFiles' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="px-3 py-2 font-medium border-b-2 rounded-none shrink-0">
                                            Attachments
                                        </button>
                                    </div>
                                </div>
                                <div class="px-4 pt-4 tab-content">
                                    <div x-show="activeTab === 'tabImages'"
                                        x-transition:enter="transition-all duration-500 easy-in-out"
                                        x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                        <div class="grid grid-cols-4 gap-2">
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />

                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />

                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                            <img class="object-cover object-center rounded-lg aspect-square"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div x-show="activeTab === 'tabFiles'"
                                        x-transition:enter="transition-all duration-500 easy-in-out"
                                        x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                        <div class="flex flex-col space-y-3.5">
                                            <template x-for="file in attachments" :key="file.id">
                                                <div class="flex items-center space-x-3">
                                                    <i class="text-base fa-regular fa-file"></i>
                                                    <div>
                                                        <a :href="file.file_path" target="_blank"
                                                            class="font-medium text-slate-700 dark:text-navy-100 truncate max-w-[200px] block hover:underline">
                                                            <span x-text="file.file_name"></span>
                                                        </a>
                                                        <div
                                                            class="flex text-xs text-slate-400 dark:text-navy-300">
                                                            {{-- <span
                                                                x-text="file.mime_type.includes('audio') ? '03:12' : ''"></span> --}}
                                                            {{-- <template x-if="file.mime_type.includes('audio')">
                                                                <div
                                                                    class="w-px mx-2 my-1 bg-slate-200 dark:bg-navy-500">
                                                                </div>
                                                            </template> --}}
                                                            <span x-text="'Size ' + (file.file_size / 1024 / 1024).toFixed(2) + ' MB'"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </main>
    </div>
</x-app-layout>

<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-app.js";
    import { getFirestore, collection, addDoc,getDocs, query, orderBy, onSnapshot, where, doc, setDoc, getDoc, updateDoc, limit, serverTimestamp } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-firestore.js";

    // Your Firebase Config
    const firebaseConfig = {
        apiKey: "{{ config('firebase.api_key') }}",
        authDomain: "{{ config('firebase.auth_domain') }}",
        projectId: "{{ config('firebase.project_id') }}",
        storageBucket: "{{ config('firebase.storage_bucket') }}",
        messagingSenderId: "{{ config('firebase.messaging_sender_id') }}",
        appId: "{{ config('firebase.app_id') }}",
        measurementId: "{{ config('firebase.measurement_id') }}",
    };

    const app = initializeApp(firebaseConfig);
    const db = getFirestore(app);

    document.addEventListener('alpine:init', () => {        

        Alpine.data('chatApp', () => ({
            initialContactId: new URLSearchParams(window.location.search).get('contact'),
            authUser: @json(auth()->user()), // Store authenticated user details
            message: '',
            messages: [],
            lastMessages: {},
            typingUsers: [],
            isShowChatInfo: false,
            activeChat: null,
            contactUser: null,
            contactUserPhoto: '/images/avatar.png',
            contactUserName: null,
            contactProject: null,
            contactProjectId: null,
            onlineUsers: [],
            lastSeen: '',
            unreadCount: {},
            attachments: [],
            contacts: @json($contacts),

            init() {
                this.loadMessages();
                this.loadLastMessages();
                this.setupUserStatus();
                this.listenForTyping();

                this.$watch('messages', () => {
                    this.$nextTick(() => {
                        let container = this.$refs.messagesContainer;
                        if (container) {
                            container.scrollTop = container.scrollHeight;
                        }
                    });
                });


                if (this.initialContactId) {

                    const initialcontact = this.contacts.find(({ id }) => id == this.initialContactId);
                    console.log(initialcontact);
                    
                    this.selectChat(initialcontact ?? null);
                } else {
                    this.selectChat(@json($contacts->first() ?? null));
                }

            },
            async setupUserStatus() {
                if (!this.authUser) return;

                const userRef = doc(db, "users", String(this.authUser.id));

                try {
                    const userSnapshot = await getDoc(userRef);

                    if (userSnapshot.exists()) {
                        // If user exists, update their online status
                        await updateDoc(userRef, {
                            online_status: true,
                            last_seen: serverTimestamp(),
                        });
                    } else {
                        // If user does not exist, create a new document
                        await setDoc(userRef, {
                            id: this.authUser.id,
                            email: this.authUser.email,
                            online_status: true,
                            last_seen: serverTimestamp(),
                        });
                    }

                    // Detect when user switches tabs or minimizes the browser
                    document.addEventListener("visibilitychange", async () => {
                        if (document.hidden) {
                            // Set user offline when tab is inactive
                            await updateDoc(userRef, {
                                online_status: false,
                                last_seen: serverTimestamp(),
                            });
                        } else {
                            // Set user online when tab becomes active
                            await updateDoc(userRef, {
                                online_status: true,
                                last_seen: serverTimestamp(),
                            });
                        }
                    });

                    // Mark user offline when they close the tab
                    window.addEventListener("beforeunload", async () => {
                        await updateDoc(userRef, {
                            online_status: false,
                            last_seen: serverTimestamp(),
                        });
                    });

                    // Logout function to update offline status manually
                    this.logout = async () => {
                        await updateDoc(userRef, {
                            online_status: false,
                            last_seen: serverTimestamp(),
                        });
                        // Perform logout logic
                    };

                } catch (error) {
                    console.error("Error setting up user status:", error);
                }
            },
            loadMessages() {
                if (!this.activeChat) return;

                const collectionName = `messages_${this.activeChat}`;
                const messagesRef = query(
                    collection(db, collectionName),
                    orderBy("created_at")
                );
                onSnapshot(messagesRef, (snapshot) => {
                    this.messages = snapshot.docs.map(doc => {
                        let data = doc.data();
                        return {
                            ...data,
                            file_url: data.file_url || null,
                            file_type: data.file_type || "",
                        };
                    });
                });
            },

            watchUserStatus(userId) {
                const userRef = doc(db, "users", String(userId)); // Reference to Firestore user document

                onSnapshot(userRef, (docSnapshot) => {
                    if (docSnapshot.exists()) {
                        const userData = docSnapshot.data();
                        if (userData.online_status) {
                            if (!this.onlineUsers.includes(userId)) {
                                this.onlineUsers.push(userId);
                                this.lastSeen = this.formatTimestamp(userData.last_seen);
                            }
                        } else {
                            this.onlineUsers = this.onlineUsers.filter(id => id !== userId);
                            this.lastSeen = this.formatTimestamp(userData.last_seen);
                        }
                    }
                });
            },

            selectChat(contact) {
                this.activeChat = contact.chat_id;
                this.contactUser = contact.contact_user;
                if (contact.contact_user.profile.photo_src) {
                    this.contactUserPhoto = contact.contact_user.profile.photo_src;
                }
                this.contactUserName = `${contact.contact_user.first_name} ${contact.contact_user.last_name}`;
                this.messages = contact.messages;

                this.contactProject = contact.project;
                this.contactProjectId = contact.project.id;
                this.isShowChatInfo = true;
                this.attachments = contact.project.attachments;
                this.loadMessages();
            },

            async sendMessage() {
                if (this.message.trim() === '' || !this.activeChat) return;
                const msg = this.message;
                this.message = '';

                const collectionName = `messages_${this.activeChat}`;
                await addDoc(collection(db, collectionName), {
                    chat_id: this.activeChat,
                    sender_id: this.authUser.id,
                    receiver_id: this.contactUser.id,
                    message: msg,
                    is_read: false,
                    created_at: serverTimestamp(),
                    updated_at: serverTimestamp(),
                });
            },

            // Load last message for each contact
            loadLastMessages() {
                this.$nextTick(() => {
                    document.querySelectorAll("[data-chat-id]").forEach((element) => {
                        let chatId = element.getAttribute("data-chat-id");
                        this.fetchLastMessage(chatId);
                    });
                });
            },

            async fetchLastMessage(chatId) {
                // this.calculateUnreadMessages(chatId);

                const messagesRef = query(
                    collection(db, `messages_${chatId}`),
                    orderBy("created_at", "desc"),
                    limit(1)
                );

                onSnapshot(messagesRef, (snapshot) => {
                    if (!snapshot.empty) {
                        const lastMessage = snapshot.docs[0].data();
                        if (lastMessage.created_at) {
                            this.lastMessages[chatId] = {
                                message: lastMessage.message || "[File]",
                                created_at: lastMessage.created_at?.toDate().toLocaleString()
                            };
                        }
                        
                    } else {
                        this.lastMessages[chatId] = { message: "", created_at: "" };
                    }
                });
            },

            async handleTyping() {
                const chatId = this.activeChat;
                const chatRef = doc(db, "chats", chatId);

                try {
                    const chatSnap = await getDoc(chatRef);

                    if (chatSnap.exists()) {
                        // If the chat document exists, update the typing status
                        await updateDoc(chatRef, {
                            [`typing.${this.authUser.id}`]: true
                        });
                    } else {
                        // If the chat document doesn't exist, create it first
                        await setDoc(chatRef, {
                            typing: {
                                [this.authUser.id]: true
                            }
                        });
                    }

                    // Stop typing status after 3 seconds of inactivity
                    clearTimeout(this.typingTimeout);
                    this.typingTimeout = setTimeout(async () => {
                        await updateDoc(chatRef, {
                            [`typing.${this.authUser.id}`]: false
                        });
                    }, 3000);

                } catch (error) {
                    console.error("Error handling typing status:", error);
                }
            },

            listenForTyping() {
                this.$watch('activeChat', (chat) => {
                    if (!chat) return;

                    const chatId = chat;
                    const chatRef = doc(db, "chats", chatId);

                    onSnapshot(chatRef, (docSnapshot) => {
                        if (docSnapshot.exists()) {
                            const typingData = docSnapshot.data().typing || {};
                            this.typingUsers = Object.keys(typingData).filter(userId => typingData[userId] && userId !== String(this.authUser.id)).map(userId => +userId);
                        }
                    });
                });
            },


            handleFileUpload(event) {
                const file = event.target.files[0];
                if (!file || !this.activeChat) return;

                let formData = new FormData();
                formData.append("file", file);
                formData.append("chat_id", this.activeChat);
                formData.append("receiver_id", this.contactUser.id);

                fetch("{{ route('uploadFile') }}", {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Store the file message in Firestore (or however you're managing messages)
                        addDoc(collection(db, `messages_${this.activeChat}`), {
                            chat_id: this.activeChat,
                            sender_id: this.authUser.id,
                            receiver_id: this.contactUser.id,
                            message: "", // Empty text message
                            file_url: data.file_url, // URL from Laravel response
                            file_type: file.type,
                            is_read: false,
                            created_at: serverTimestamp(),
                            updated_at: serverTimestamp(),
                        });

                        console.log("File uploaded successfully!");
                    } else {
                        console.error("File upload failed:", data.error);
                    }
                })
                .catch(error => console.error("Error uploading file:", error));
            },

            formatTimestamp(timestamp) {
                if (!timestamp) return "Unknown";
                const date = timestamp.toDate(); // Convert Firestore timestamp to JavaScript Date
                return date.toLocaleString(); // Format date for readability
            },
        }));
    });

</script>