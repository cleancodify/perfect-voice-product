<x-landing-layout title="ActorList">
    <section x-data="actorFilter()" class="wrapper !bg-[#ffffff]">
        <div class="container py-[5rem] xl:!py-[7rem] lg:!py-[7rem] md:!py-[7rem]">
            <div class="grid lg:grid-cols-3 md:grid-cols-1">
                <div class="w-full">
                    <div class="flex justify-center items-center lg:mr-[80px] mt-[10px]">
                        <div class="form-floating !relative w-full">
                            <input type="text" id="searchKey"
                                class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] !rounded-r-none border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe]"
                                x-model="searchKey" placeholder="Search by name" @keydown.enter="fetchActors(false)">
                            <label
                                class="text-[#959ca9] text-[.75rem] font-bold absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block"
                                for="searchKey">
                                Search by name
                            </label>
                        </div>
                        <div
                            class="w-[52px] h-[52px] text-white actor-list-drop-down-icon bg-success flex !rounded-r-[0.4rem]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-[28px] w-[28px] justify-center items-center m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                    </div>

                    <div class="w-full flex-[0_0_auto] max-w-full mt-[30px]">
                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Gender</label>
                        <div class="form-select-wrapper lg:mr-[80px]">
                            <select class="custom-select form-select focus:!border-primary" id="gender" x-model="gender"
                                @change="fetchActors(false)">
                                <option value="">Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                    </div>

                    <div class="w-full flex-[0_0_auto] max-w-full mt-[30px]">
                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Language</label>
                        <div class="form-select-wrapper lg:mr-[80px]">
                            <select class="custom-select form-select focus:!border-primary" id="languageName"
                                x-model="languageName" @change="fetchActors(false)">
                                <option value="">Language</option>
                                <template x-for="type in languageType" :key="type.code">
                                    <option :value="type.code" x-text="type.name"></option>
                                </template>
                            </select>
                        </div>
                    </div>

                    <div class="w-full flex-[0_0_auto] max-w-full mt-[30px]">
                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Voice Type</label>
                        <div class="form-select-wrapper lg:mr-[80px]">
                            <select class="custom-select form-select focus:!border-primary" id="voiceType"
                                x-model="selectedVoiceTypeId" @change="fetchActors(false)">
                                <option value="">Voice type</option>
                                <template x-for="type in voiceType" :key="type.id">
                                    <option :value="type.id" x-text="type.name"></option>
                                </template>
                            </select>
                        </div>
                    </div>

                    <div class="w-full flex-[0_0_auto] max-w-full mt-[30px]">
                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Product Type</label>
                        <div class="form-select-wrapper lg:mr-[80px]">
                            <select class="custom-select form-select focus:!border-primary" id="productTypeName"
                                x-model="productTypeName" @change="fetchActors(false)">
                                <option value="">Product Type</option>
                                <template x-for="(value, key) in productType" :key="key">
                                    <option :value="key" x-text="value"></option>
                                </template>
                            </select>
                        </div>
                    </div>

                    <div x-show="actors.length > 0" class="mt-[20px]">
                        <ul>
                            <template x-for="actor in actors" :key="actor.id">
                                <li x-text="actor.name"></li>
                            </template>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <p class="lg:text-[1.8rem] sd:text-[1rem] font-bold leading-[1.25] tracking-[-0.03em] mb-7">
                        <template x-if="productName && gender">
                            <span
                                x-text="`Voice actors, company video, ${productName.toLowerCase()}, ${gender.toLowerCase()}`"></span>
                        </template>

                        <template x-if="productName && !gender">
                            <span x-text="`Voice actors, company video, ${productName.toLowerCase()}`"></span>
                        </template>

                        <template x-if="!productName && gender">
                            <span x-text="`Voice actors, company video, ${gender.toLowerCase()}`"></span>
                        </template>

                        <template x-if="!productName && !gender">
                            <span>Voice actors, company video</span>
                        </template>
                    </p>

                    <div class="mt-6">
                        <div x-show="actors.length > 0">
                            <template x-for="(actor, index) in actors" :key="index">
                                <div class="flex flex-col card hover:shadow-green-200 pb-[20px] p-3 mb-5">
                                    <div class="flex flex-col justify-between gap-4 lg:flex-row">
                                        <div class="flex justify-between gap-3 align-middle">
                                            <div class="flex self-center gap-5">
                                                <div class="flex self-center">
                                                    <template x-if="actor.profile">
                                                        <div
                                                            class="overflow-hidden border border-gray-200 rounded-full">
                                                            <img :src="actor.profile.photo_src || (actor.profile.gender === 'male' ? '/images/avatar_m.png' : '/images/avatar_f.png')"
                                                                class="svg-inject icon-svg icon-svg-md !w-[5rem] !h-[5rem] text-[#343f52] text-blue object-cover"
                                                                alt="image" loading="lazy">
                                                        </div>
                                                    </template>
                                                </div>

                                                <div class="flex flex-col self-center mt-4">
                                                    <p class="font-bold text-[20px] custom-p"
                                                        x-text="actor.first_name + ' ' + actor.last_name"></p>
                                                    <p class="font-medium text-[16px] custom-p capitalize"
                                                        x-text="actor.profile ? (actor.profile.gender + ', ' + actor.profile.country.name) : ''">
                                                    </p>
                                                    <p class="font-thin text-[14px] custom-p">
                                                        Natural, Corporate, Distinctive
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col justify-center pt-4 align-middle">
                                            <p class="flex items-center gap-2 custom-p">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                                                </svg>

                                                <span class="font-bold text-[16px]"
                                                    x-text="actor.profile ? actor.profile.language.name : ''"></span>
                                            </p>

                                            <p class="flex items-center gap-2 custom-p">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                                                </svg>

                                                <span class="font-bold text-[16px]"
                                                    x-text="'Within ' + (actor.profile ? actor.profile.deadline : '') + ' hours'"></span>
                                            </p>

                                            <p class="flex items-center gap-2 custom-p">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>

                                                <span class="font-bold text-[16px]"
                                                    x-text="'$ ' + (actor.profile ? actor.profile.price : '0')"></span>
                                            </p>
                                        </div>

                                        <div class="flex flex-col self-center gap-2">
                                            <a :href="'/actor-list/' + actor.id"
                                                class="btn btn-md btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded !mb-0 whitespace-nowrap">
                                                More Info

                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                    <div x-data="audioPlayer()"
                                        class="w-full p-4 bg-white border border-gray-100 rounded-lg">
                                        <div class="flex items-center gap-2">
                                            <button @click="togglePlay"
                                                class="flex items-center justify-center text-white rounded-full size-10 min-w-10 min-h-10 bg-primary">
                                                <i x-show="!isPlaying" class="text-lg fas fa-play"></i>
                                                <i x-show="isPlaying" class="text-lg fas fa-pause"></i>
                                            </button>

                                            <div x-ref="progressbar"
                                                class="relative w-full h-2 bg-gray-200 rounded-full cursor-pointer"
                                                @mousedown="startSeeking" @mousemove="isSeeking && seekAudio($event)"
                                                @mouseup="isSeeking = false" @mouseleave="isSeeking = false">
                                                <div class="absolute top-0 left-0 h-2 rounded-full bg-primary"
                                                    :style="'width: ' + progress + '%'"></div>
                                            </div>
                                        </div>

                                        <audio x-ref="audio" @timeupdate="updateProgress" @loadedmetadata="loadMetadata"
                                            @ended="handleAudioEnd">
                                            <source :src="actor.profile.audio_src_explainer" type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div x-show="actors.length === 0" class="h-full">
                            <p class="flex justify-center h-full pt-16 text-xl item-center">No actors found.</p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center w-full" x-show="totalPages > 0">
                        <ol class="pagination flex space-x-1.5">
                            <!-- Previous Page Button -->
                            <li>
                                <button @click="prevPage"
                                    class="flex items-center justify-center transition-colors rounded-lg size-8 bg-slate-150 text-slate-500 hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                                    aria-label="Previous page" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                            </li>

                            <!-- Pagination Numbers -->
                            <template x-for="page in Array.from({ length: totalPages }, (_, i) => i + 1)" :key="page">
                                <li>
                                    <button @click="selectCurrentItem(page)"
                                        :class="currentPage === page ? 'bg-primary text-white' : 'bg-slate-150 text-slate-500'"
                                        class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-primary active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                                        :aria-label="'Page ' + page" role="button">
                                        <span x-text="page"></span>
                                    </button>
                                </li>
                            </template>

                            <!-- Next Page Button -->
                            <li>
                                <button @click="nextPage"
                                    class="flex items-center justify-center transition-colors rounded-lg size-8 bg-slate-150 text-slate-500 hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                                    aria-label="Next page" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-landing-layout>

<script>
    let currentlyPlayingAudio = null;

    function audioPlayer() {
        return {
            isPlaying: false,
            currentTime: 0,
            duration: 0,
            progress: 0,
            isSeeking: false, // Track if user is dragging the slider

            togglePlay() {
                const audio = this.$refs.audio;

                // Stop currently playing audio if different from the new one
                if (currentlyPlayingAudio && currentlyPlayingAudio !== audio) {
                    const previousComponent = currentlyPlayingAudio.closest('[x-data]');
                    if (previousComponent) {
                        const prevData = Alpine.$data(previousComponent);
                        if (prevData) {
                            prevData.isPlaying = false;
                        }
                    }
                    currentlyPlayingAudio.pause();
                    // currentlyPlayingAudio.currentTime = 0;
                }

                if (audio.paused) {
                    audio.play();
                    this.isPlaying = true;
                    currentlyPlayingAudio = audio;
                } else {
                    audio.pause();
                    this.isPlaying = false;
                    currentlyPlayingAudio = null;
                }
            },

            updateProgress() {
                if (!this.isSeeking) { // Only update if not manually seeking
                    const audio = this.$refs.audio;
                    this.currentTime = audio.currentTime;
                    this.progress = (audio.currentTime / audio.duration) * 100;
                }
            },

            loadMetadata() {
                this.duration = this.$refs.audio.duration;
            },

            startSeeking(event) {
                this.isSeeking = true;
                this.seekAudio(event);
            },

            seekAudio(event) {
                if (!this.isSeeking) return;

                const audio = this.$refs.audio;
                const progressBar = this.$refs.progressbar;
                const rect = progressBar.getBoundingClientRect();
                const clickX = event.clientX - rect.left;
                const newTime = (clickX / rect.width) * audio.duration;

                audio.currentTime = newTime;
                this.progress = (clickX / rect.width) * 100;
            },

            handleAudioEnd() {
                this.isPlaying = false; // Reset playing status when audio ends
                this.progress = 0; // Reset progress bar
            },

            formatTime(time) {
                let minutes = Math.floor(time / 60);
                let seconds = Math.floor(time % 60);
                return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            }
        };
    }

    function actorFilter() {
        console.log(JSON.parse(@json($actors)));
        
        return {
            searchKey: '',
            gender: '',
            productType: JSON.parse('{!! addslashes($product_types) !!}'),
            productTypeName: '',
            productName:'',
            actors: JSON.parse(@json($actors)),
            itemsPerPage: {{ $per_page }},
            currentPage: 1,
            totalPages: {{ $total_page }},
            tempTotalPage: {{ $total_page }},
            voiceType: JSON.parse(@json($voice_specials)),
            selectedVoiceTypeName: '',
            selectedVoiceTypeId: '',
            languageType: JSON.parse(@json($language)),
            languageName: '',

            prevPage() {
                if (this.currentPage > 1) {
                    this.currentPage--;
                    this.fetchActors(true);
                }
            },

            nextPage() {
                if (this.currentPage < this.totalPages) {
                    this.currentPage++;
                    this.fetchActors(true);
                }
            },

            selectCurrentItem(page) {
                this.currentPage = page;
                this.fetchActors(true);
            },

            async fetchActors(flag) {
                let selectedType = this.voiceType.find(type => type.id == this.selectedVoiceTypeId);

                if (selectedType) {
                    this.selectedVoiceTypeName = selectedType.name;
                }

                this.productName = this.productType[this.productTypeName];

                let queryParams;
                if (flag) {
                    queryParams = {
                        search: this.searchKey,
                        gender: this.gender,
                        voice_type: this.selectedVoiceTypeId,
                        product_type: this.productTypeName,
                        language: this.languageName,
                        start: (this.currentPage - 1) * this.itemsPerPage,
                        end: this.currentPage * this.itemsPerPage
                    };
                } else {
                    this.currentPage = 1;
                    queryParams = {
                        search: this.searchKey,
                        gender: this.gender,
                        voice_type: this.selectedVoiceTypeId,
                        product_type: this.productTypeName,
                        language: this.languageName,
                        start: 0,
                        end: this.itemsPerPage
                    };
                }

                try {
                    const response = await fetch(`/actors/filter?${new URLSearchParams(queryParams).toString()}`);
                    const data = await response.json();
                    this.actors = data.data;

                    if (flag) {
                        this.totalPages = this.tempTotalPage;
                    } else {
                        this.totalPages = Math.ceil(data.total_count / this.itemsPerPage);
                    }

                    return this.actors;
                } catch (error) {
                    console.error('Error fetching actors:', error);
                }
            },
        };
    }
</script>