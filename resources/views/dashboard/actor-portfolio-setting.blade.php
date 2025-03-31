@php
$profile = $actor->profile;
@endphp

<x-app-layout title="Form Layout v5" is-header-blur="true">
    <main class="main-content w-full sm:px-[4px] lg:px-[310px] py-8" x-data="formHandler()">
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
                    <div
                        class="flex flex-col items-center p-4 space-y-4 border-b border-slate-200 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                        <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Portfolio Setting
                        </h2>
                        {{-- <div class="flex justify-center space-x-2">
                            <a href="{{ route('dashboard') }}"
                                class="btn min-w-[7rem] rounded-md border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                Cancel
                            </a>
                            <button type="submit" x-bind:disabled="loading"
                                class="btn min-w-[7rem] rounded-md bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 flex items-center justify-center">
                                <svg x-show="loading" class="w-5 h-5 mr-2 animate-spin" fill="none" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                </svg>
                                <span x-text="loading ? 'Saving...' : 'Save'"></span>
                            </button>
                        </div> --}}
                    </div>
                    <div class="p-4 sm:p-5">
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-col">
                                <span class="text-base font-medium text-slate-600 dark:text-navy-100">Audio</span>
                                <span>
                                    Place a corresponding demo with each medium. Note: Your profile is only
                                    visible in the categories for which you upload a demo. Never use the same demo
                                    more than once.
                                </span>
                            </div>

                            @php
                            $voice_types = [
                                'audio_src_corporate' => 'Corporate',
                                'audio_src_explainer' => 'Explainer',
                                'audio_src_elearning' => 'E-learning',
                                'audio_src_guide' => 'Audio guide',
                                'audio_src_telephony' => 'Telephony',
                                'audio_src_commercial' => 'Commercial',
                                'audio_src_characters' => 'Characters',
                            ];
                            @endphp

                            @foreach($voice_types as $key => $text)
                            <div class="flex flex-col">
                                <span class="mb-1 text-base font-medium text-slate-600 dark:text-navy-100">{{ $text
                                    }}</span>


                                <div x-data="audioPlayer()" x-show="voice_files['{{$key}}']"
                                    class="w-full p-4 bg-white border border-gray-100 rounded-lg shadow-md">

                                    <div class="flex items-center justify-end mb-1 text-sm text-gray-600">
                                        <button @click="deleteVoice('{{ $key }}')"
                                            class="text-red-500 hover:text-red-600">
                                            <i class="text-lg fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button @click="togglePlay"
                                            class="flex items-center justify-center text-white rounded-full size-10 min-w-10 min-h-10 bg-primary">
                                            <i x-show="!isPlaying" class="text-lg fas fa-play"></i>
                                            <i x-show="isPlaying" class="text-lg fas fa-pause"></i>
                                        </button>

                                        <!-- Seekbar -->
                                        <div x-ref="progressbar"
                                            class="relative w-full h-2 bg-gray-200 rounded-full cursor-pointer"
                                            @mousedown="startSeeking" @mousemove="isSeeking && seekAudio($event)"
                                            @mouseup="isSeeking = false" @mouseleave="isSeeking = false">
                                            <div class="absolute top-0 left-0 h-2 rounded-full bg-primary"
                                                :style="'width: ' + progress + '%'"></div>
                                        </div>
                                    </div>

                                    <!-- Hidden Audio Element -->
                                    <audio x-ref="audio" @timeupdate="updateProgress" @loadedmetadata="loadMetadata"
                                        @ended="handleAudioEnd">
                                        <source :src="voice_files['{{$key}}']" type="audio/mpeg">
                                    </audio>
                                </div>

                                <div x-show="!voice_files['{{$key}}']" class="filepond fp-bordered">
                                    <input type="file" x-ref="{{ $key }}" />
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

<script>
    function formHandler() {
        return {
            loading: false,
            alert: {
                show: false,
                type: 'success', // success or error
                message: ''
            },
            voice_files: {
                audio_src_corporate: '{{ $profile->audio_src_corporate }}',
                audio_src_explainer: '{{ $profile->audio_src_explainer }}',
                audio_src_elearning: '{{ $profile->audio_src_elearning }}',
                audio_src_guide: '{{ $profile->audio_src_guide }}',
                audio_src_telephony: '{{ $profile->audio_src_telephony }}',
                audio_src_commercial: '{{ $profile->audio_src_commercial }}',
                audio_src_characters: '{{ $profile->audio_src_characters }}',
            },
            formData: {
                // deadline: '{{ $profile->deadline }}',
                _token: document.querySelector('meta[name=\'csrf-token\']').content
            },
            init() {
                const voice_types = @json($voice_types);

                Object.entries(voice_types).forEach(([key, text]) => {
                    this.setupFilePond(key);
                });
            },
            setupFilePond(ref) {
                const pond = FilePond.create(this.$refs[ref], {
                    allowMultiple: false,
                    name: ref,
                    labelIdle: 'Drag & Drop your voice or <span class="filepond--label-action"> Browse </span><br> <span class="!text-sm text-error">Format MP3, maximum 10MB</span>',
                    acceptedFileTypes: ['audio/*'],  // Only allow audio files
                    server: {
                        process: (fieldName, file, metadata, load, error, progress, abort) => {
                            // Check file type (optional, client-side validation)
                            if (!file.type.startsWith('audio/')) {
                                error('Only audio files are allowed');
                                return;
                            }
                            const formData = new FormData();
                            formData.append(fieldName, file);
                            console.log(formData);
                            fetch('{{ route('uploadVoice') }}', {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.error) {
                                    error('File upload failed');
                                    this.alert.type = 'error';
                                    this.alert.message = data.message || 'Something went wrong!';
                                } else {
                                    load(data.filePath); // Pass the uploaded file path to FilePond
                                    this.alert.type = 'success';
                                    this.alert.message = 'Profile updated successfully!';

                                    setTimeout(() => {
                                        this.voice_files[fieldName] = data.filePath;
                                    }, 3000);
                                }

                                this.alert.show = true;
                                setTimeout(() => { this.alert.show = false; }, 3000);
                            })
                            .catch(() => {
                                error('File upload failed');
                            });
                        }
                    }
                });
            },
            async submitForm() {
                this.loading = true; // Show loader
                try {
                    const data = await fetch('{{ route('actorPortfolioSettings') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': this.formData._token
                        },
                        body: JSON.stringify(this.formData)
                    }).then(res => res.json());

                    if (data.errors) {
                        this.alert.type = 'error';
                        this.alert.message = data.message || 'Something went wrong!';
                        this.errors = data.errors;
                    } else {
                        this.alert.type = 'success';
                        this.alert.message = 'Portfolio updated successfully!';
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
            deleteVoice(voiceType) {
                fetch('{{ route('deleteVoice') }}', {
                    method: 'DELETE',
                    body: JSON.stringify({ voice_type: voiceType }),
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.alert.type = 'success';
                        this.alert.message = data.message;
                        this.voice_files[voiceType] = null; // Remove the file from UI
                    } else {
                        this.alert.type = 'error';
                        this.alert.message = data.error || 'Failed to delete file.';
                    }

                    this.alert.show = true;
                    setTimeout(() => { this.alert.show = false; }, 3000);
                })
                .catch(() => {
                    this.alert.type = 'error';
                    this.alert.message = 'Failed to delete file.';
                    this.alert.show = true;
                    setTimeout(() => { this.alert.show = false; }, 3000);
                });
            }

        };
    }

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
</script>