@php
    $profile = $actor->profile;
    $audioSources = array_filter([
        'explainer' => $profile->audio_src_explainer,
        'elearning' => $profile->audio_src_elearning,
        'guide' => $profile->audio_src_guide,
        'telephony' => $profile->audio_src_telephony,
        'commercial' => $profile->audio_src_commercial,
        'characters' => $profile->audio_src_characters,
    ]);
    $photo_src = $profile->gender == 'male' ? '/images/avatar_m.png' : '/images/avatar_f.png';
    if ($profile->photo_src) {
        $photo_src = $profile->photo_src;
    }
@endphp

<x-landing-layout title="{{ $actor->first_name }}">
    <section class="wrapper !bg-[#ffffff]">
        <div class="container py-[5rem] xl:!py-[7rem] lg:!py-[7rem] md:!py-[7rem]">
            <div class="flex justify-between p-4 mb-10 border border-gray-200 rounded-md bg-gray-50">
                <div class="flex items-center gap-3">
                    <div class="flex self-center">
                        <img src="{{ asset($photo_src) }}"
                            class="rounded-full svg-inject icon-svg icon-svg !size-[6rem] object-cover" alt="image" loading="lazy">
                    </div>

                    <div class="flex flex-col justify-center gap-1">
                        <p class="mb-0 text-2xl font-bold text-gray-700">{{ $actor->first_name." ".$actor->last_name }}
                        </p>
                        <p class="mb-0 text-sm font-medium text-gray-500 capitalize">{{ isset($profile) ?
                            $profile->gender :
                            '' }}, {{ isset($profile) ? $profile->country->name : '' }}</p>
                    </div>
                </div>
                <div class="w-full max-w-[350px]">
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-xl text-gray-700 !mb-0">
                            $400,00
                        </p>
                    </div>

                    <a href="javascript:void(0);" 
                        x-data 
                        @click="
                            if (!{{ auth()->check() ? 'true' : 'false' }}) { 
                                localStorage.setItem('redirect_after_login', '{{ route('createProjectView', ['actorId' => $actor->id]) }}');
                                window.location.href = '{{ route('login') }}';
                            } else {
                                window.location.href = '{{ route('createProjectView', ['actorId' => $actor->id]) }}';
                            }
                        "
                        class="w-full !justify-between btn btn-md btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded !mb-0 whitespace-nowrap">
                        Create project
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7-7 7M5 12h14" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="flex justify-between gap-3 px-4">
                <div class="w-full max-w-2xl">
                    @foreach($audioSources as $key => $source)
                    <div x-data="audioPlayer()"
                        class="w-full p-4 mb-5 bg-white border border-gray-100 rounded-lg shadow-md">
                        <!-- Play Button & Time -->
                        <div class="flex items-center justify-between mb-3">
                            <p
                                class="flex font-bold items-center xl:text-[1rem] text-[calc(1.325rem_+_0.9vw)] !leading-[1.25] tracking-[-0.03em] !mb-3 capitalize">
                                {{$key}}
                            </p>

                            <span x-text="formatTime(currentTime)" class="text-sm text-gray-600"></span>
                        </div>


                        <div class="flex items-center gap-2">
                            <button @click="togglePlay"
                                class="flex items-center justify-center text-white rounded-full size-10 min-w-10 min-h-10 bg-primary">
                                <i x-show="!isPlaying" class="text-lg fas fa-play"></i>
                                <i x-show="isPlaying" class="text-lg fas fa-pause"></i>
                            </button>

                            <!-- Seekbar -->
                            <div x-ref="progressbar" class="relative w-full h-2 bg-gray-200 rounded-full cursor-pointer"
                                @mousedown="startSeeking" @mousemove="isSeeking && seekAudio($event)"
                                @mouseup="isSeeking = false" @mouseleave="isSeeking = false">
                                <div class="absolute top-0 left-0 h-2 rounded-full bg-primary"
                                    :style="'width: ' + progress + '%'"></div>
                            </div>
                        </div>

                        <!-- Duration & File Name -->
                        <div class="flex items-center justify-between mt-2 text-sm text-gray-600">
                            <span x-text="formatTime(duration)"></span>

                            <button class="hover:text-primary">
                                <i class="text-lg fa fa-download" aria-hidden="true"></i>
                            </button>
                        </div>

                        <!-- Hidden Audio Element -->
                        <audio x-ref="audio" @timeupdate="updateProgress" @loadedmetadata="loadMetadata"
                            @ended="handleAudioEnd">
                            <source src="{{ $source }}" type="audio/mpeg">
                        </audio>
                    </div>
                    @endforeach

                    {{-- <video src="{{ $profile->video_src }}"></video> --}}

                    <p class="mt-10 text-2xl text-gray-700">About {{ $actor->first_name." ".$actor->last_name }}
                    </p>
                    <div class="p-4 border border-gray-200 rounded-md">
                        <p
                            class="flex items-center xl:text-[0.9rem] text-[calc(1.325rem_+_0.9vw)] !leading-[1.5] tracking-[-0.05em] !mb-0">
                            {{ $profile->bio }}
                        </p>
                    </div>
                </div>
                <div class="max-w-[350px] w-full">
                    <div class="card">
                        <div class="p-4 card-body">
                            <div class="mb-5">
                                <p
                                    class="flex font-bold items-center xl:text-[1rem] text-[calc(1.325rem_+_0.9vw)] !leading-[1.25] tracking-[-0.03em] !mb-2">
                                    <i class="mr-2 fa fa-globe"></i>
                                    Language
                                </p>
                                <p
                                    class="flex items-center xl:text-[0.9rem] text-[calc(1.325rem_+_0.9vw)] !leading-[1.25] tracking-[-0.03em] !mb-0">
                                    {{ $profile->language->name }}</p>
                            </div>
                            <div class="mb-4">
                                <p
                                    class="flex font-bold items-center xl:text-[1rem] text-[calc(1.325rem_+_0.9vw)] !leading-[1.25] tracking-[-0.03em] !mb-2">
                                    <i class="mr-2 fa fa-calendar"></i>
                                    Availability
                                </p>
                                <p
                                    class="flex items-center xl:text-[0.9rem] text-[calc(1.325rem_+_0.9vw)] !leading-[1.25] tracking-[-0.03em] !mb-0">
                                    with in <span class="ml-1 font-bold">{{ $profile->deadline }} hours</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-landing-layout>

<script>
    let currentlyPlayingAudio = null; // Global reference to track currently playing audio

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

</script>