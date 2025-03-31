@php
$profile = $actor->profile;
@endphp

<x-landing-layout title="CreateProject">
    <section class="wrapper !bg-[#ffffff]">
        <div class="container py-[5rem] xl:!py-[7rem] lg:!py-[7rem] md:!py-[7rem]">
            <form action="{{ route('createProject', ['actorId' => $actor->id]) }}" method="POST">
                @csrf
                <div class="grid space-y-10 lg:grid-cols-3 md:grid-cols-1" x-data="createProject()">
                    <div class="lg:col-span-2 lg:mr-12">
                        <div class="flex flex-col">
                            <p class="text-2xl">Details of the assigment</p>
                            <p class="text-base text-gray-400">
                                Easily calculate the total price or request a quote! At VoiceProductions you always pay
                                afterwards
                            </p>

                            <div class="flex flex-col gap-3 mt-3">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex justify-center w-5 h-5 text-white bg-green-400 rounded-full item-center">
                                        1
                                    </div>

                                    <div class="text-base">Price calculation</div>
                                </div>

                                @php
                                $project_type = [
                                'corporate' => 'Corporate video',
                                'explainer' => 'Explainer video',
                                'elearning' => 'E-learning',
                                'telephony' => 'Telephony',
                                'tv_commercial' => 'TV commercial',
                                'radio_commercial' => 'Radio commercial',
                                'internet_commercial' => 'Internet commercial',
                                'other' => 'Other',
                                ];

                                $amount_words = [
                                '250' => '1 - 250 words',
                                '500' => '251 - 500 words',
                                '750' => '501 - 750 words',
                                '1000' => '751 - 1000 words',
                                '1250' => '1001 - 1250 words',
                                '1500' => '1251 - 1500 words',
                                'more' => 'More words / Multiple videos'
                                ];
                                @endphp

                                <div class="flex flex-col w-full gap-4 lg:flex-row">
                                    <div class="lg:w-full">
                                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Medium</label>
                                        <div class="form-select-wrapper">
                                            <select name="medium"
                                                class="custom-select form-select focus:!border-primary"
                                                x-model="selectedMedium"
                                                @change="medium = projectTypes[selectedMedium]">
                                                @foreach($project_type as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                                <!-- Using key as value -->
                                                @endforeach
                                            </select>
                                        </div>

                                        @error('medium')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="lg:w-full">
                                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Amount of
                                            words</label>
                                        <div class="form-select-wrapper">
                                            <select name="amount_words"
                                                class="custom-select form-select focus:!border-primary"
                                                x-model="selectedAmountWords"
                                                @change="amountOfWords = wordAmounts[selectedAmountWords]">
                                                @foreach($amount_words as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @error('amount_words')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="w-full h-[1px] bg-gray-300 mt-10 mb-6"></div>

                            <div class="flex flex-col gap-3 mt-3">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex justify-center w-5 h-5 text-white bg-green-400 rounded-full item-center">
                                        2
                                    </div>

                                    <div class="text-base">Content</div>
                                </div>

                                <div class="flex flex-col w-full">
                                    <div class="w-full">
                                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Project Name</label>
                                        <input type="text" name="name"
                                            class="form-control px-4 py-2 h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-sm font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:!border-primary">
                                    </div>

                                    @error('name')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="flex flex-col w-full mt-3">
                                    <div class="text-base">Attachments</div>
                                    <div class="mt-2 text-gray-400">
                                        Add here the script and other useful files for the voice actor, such as a video,
                                        storyboard or an audio file with the
                                        pronunciation of difficult words.
                                    </div>

                                    <div class="relative">
                                        <div class="flex flex-col justify-center w-full mt-6">
                                            <div class="filepond fp-bordered">
                                                <input type="file" x-ref="filepond" multiple />
                                            </div>
                                            <span class="-mt-3 text-gray-400 text-tiny">Format pdf, jpg, png, zip, txt,
                                                doc,
                                                docx, odt, xls, xlsx, ppt, pptx, mp3, m4a, wav, mov, mp4, mkv, avi, srt.
                                                Maximum 1024MB.
                                            </span>
                                        </div>
                                    </div>


                                    <label class="text-[#73777e] mt-6 font-bold text-1xl ml-1 mb-2">Deadline</label>
                                    <div>
                                        <label class="relative flex">
                                            <input x-init="$el._x_flatpickr = flatpickr($el, { minDate: 'today' })"
                                                x-model="deadline"
                                                class="w-full px-3 py-2 bg-transparent border rounded-lg form-input peer border-slate-300 !pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Choose date..." type="text" name="deadline" />
                                            <span
                                                class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="transition-colors duration-200 size-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </span>
                                        </label>

                                        @error('deadline')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="w-full h-[1px] bg-gray-300 mt-6 mb-6"></div>

                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex justify-center w-5 h-5 text-white bg-green-400 rounded-full item-center">
                                        3
                                    </div>

                                    <div class="text-base">Instructions</div>
                                </div>

                                <div class="flex flex-col w-full">
                                    <div class="text-gray-400">
                                        Clarify exactly how the recording should sound. Feel free to provide the voice
                                        actor
                                        with the recording of a previous
                                        project so that they have an immediate idea of what is expected. You can adjust
                                        the
                                        instructions afterwards via the chat
                                        box.
                                    </div>

                                    <div class="w-full mt-6">
                                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Instructions</label>
                                        <textarea name="instruction" rows="4"
                                            class="block p-2.5 w-full bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write your thoughts here..."></textarea>

                                        @error('instruction')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    @php
                                    $toneOfVoiceOptions = [
                                    'calm' => 'Calm',
                                    'cheerful' => 'Cheerful',
                                    'deep_voice' => 'Deep voice',
                                    'enthusiastic' => 'Enthusiastic',
                                    'exaggerated' => 'Exaggerated',
                                    'fascinating' => 'Fascinating',
                                    'formal' => 'Formal',
                                    'friendly' => 'Friendly',
                                    'funny' => 'Funny',
                                    'gentle' => 'Gentle',
                                    'informative' => 'Informative',
                                    'naturally' => 'Naturally',
                                    'passionately' => 'Passionately',
                                    'playful' => 'Playful',
                                    'professional' => 'Professional',
                                    'reliable' => 'Reliable',
                                    'warm' => 'Warm',
                                    'youthful' => 'Youthful',
                                    ];
                                    @endphp

                                    <div class="w-full mt-6">
                                        <label class="text-[#73777e] font-bold text-1xl ml-1 mb-2">Tone of voice</label>
                                        <div class="form-select-wrapper">
                                            <select name="tone_voice"
                                                class="custom-select form-select focus:!border-primary">
                                                @foreach($toneOfVoiceOptions as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @error('tone_voice')
                                        <span class="text-tiny+ text-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="sticky !top-[130px] flex flex-col w-full gap-3">
                            <button x-bind:disabled="loading"
                                class="w-full !justify-between btn btn-md btn-navy text-white !bg-primary border-primary hover:text-white hover:border-primary focus:shadow-primary active:text-white active:bg-primary active:border-primary disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] rounded !mb-0 whitespace-nowrap">
                                <span x-text="loading ? 'Saving...' : 'Create project'"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7-7 7M5 12h14" />
                                </svg>
                            </button>

                            <div class="w-full card">
                                <div class="w-full p-4 card-body">
                                    <div class="flex items-center justify-between mb-4">
                                        <p
                                            class="flex font-bold items-center !leading-[1.25] tracking-[-0.03em] !mb-2">
                                            <i class="mr-2 fa-solid fa-user-tie"></i>
                                            Voice actor
                                        </p>
                                        <p
                                            class="flex items-center !leading-[1.25] tracking-[-0.03em] !mb-0">
                                            <span class="ml-1 font-bold">{{ $actor->first_name }} </span>
                                        </p>
                                    </div>

                                    <div class="flex items-center justify-between mb-5">
                                        <p
                                            class="flex font-bold items-center !leading-[1.25] tracking-[-0.03em] !mb-2">
                                            <i class="mr-2 fa-solid fa-globe"></i>
                                            Language
                                        </p>
                                        <p
                                            class="flex items-center font-bold !leading-[1.25] tracking-[-0.03em] !mb-0">
                                            {{ $profile->language->name }}</p>
                                    </div>

                                    <div class="flex items-center justify-between mb-4">
                                        <p
                                            class="flex font-bold items-center !leading-[1.25] tracking-[-0.03em] !mb-2">
                                            <i class="mr-2 fa-solid fa-calendar"></i>
                                            Availability
                                        </p>
                                        <p
                                            class="flex items-center !leading-[1.25] tracking-[-0.03em] !mb-0">
                                             <span class="ml-1 font-bold">with in {{ $profile->deadline }} hours</span>
                                        </p>
                                    </div>

                                    <div class="w-full h-[1px] bg-gray-300 mt-6 mb-6"></div>

                                    <div class="flex items-center justify-between mb-4">
                                        <p
                                            class="flex font-bold items-center !leading-[1.25] tracking-[-0.03em] !mb-2">
                                            <i class="mr-2 fa-solid fa-music"></i>
                                            Medium
                                        </p>
                                        <p
                                            class="flex items-center !leading-[1.25] tracking-[-0.03em] !mb-0">
                                            <span class="ml-1 font-bold" x-text="medium"></span>
                                        </p>
                                    </div>

                                    <div class="flex items-center justify-between mb-4">
                                        <p
                                            class="flex font-bold items-center !leading-[1.25] tracking-[-0.03em] !mb-2">
                                            <i class="mr-2 fa-solid fa-book"></i>
                                            Amount of words
                                        </p>
                                        <p
                                            class="flex items-center !leading-[1.25] tracking-[-0.03em] !mb-0">
                                            <span class="ml-1 font-bold" x-text="amountOfWords"></span>
                                        </p>
                                    </div>

                                    <div class="flex items-center justify-between mb-4">
                                        <p
                                            class="flex font-bold items-center !leading-[1.25] tracking-[-0.03em] !mb-2">
                                            <i class="mr-2 fa-solid fa-calendar"></i>
                                            Deadline
                                        </p>
                                        <p
                                            class="flex items-center !leading-[1.25] tracking-[-0.03em] !mb-0">
                                            <span class="ml-1 font-bold " x-text="deadline"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-landing-layout>

<script>
    function createProject() {        
        return {
            loading: false,
            selectedMedium: 'corporate',
            medium: 'Corporate video',
            selectedAmountWords: '250',
            amountOfWords: '1 - 250 words',
            deadline: new Intl.DateTimeFormat('en-CA').format(new Date()),
            projectTypes: {
                corporate: 'Corporate video',
                explainer: 'Explainer video',
                elearning: 'E-learning',
                telephony: 'Telephony',
                tv_commercial: 'TV commercial',
                radio_commercial: 'Radio commercial',
                internet_commercial: 'Internet commercial',
                other: 'Other'
            },
            wordAmounts: {
                250: '1 - 250 words',
                500: '251 - 500 words',
                750: '501 - 750 words',
                1000: '751 - 1000 words',
                1250: '1001 - 1250 words',
                1500: '1251 - 1500 words',
                more: 'More words / Multiple videos'
            },

            init() {
                const attachment = FilePond.create(this.$refs.filepond, {
                    allowMultiple: true,
                    name: 'attachments',
                    maxFileSize: '1024MB',
                    labelIdle: 'Drop your files here or <span class="filepond--label-action">click to select</span><br> <span class="!text-xs">Use clear file names, it is not possible to change this name afterwards</span>',
                    server: {
                        process: (fieldName, file, metadata, load, error, progress, abort) => {
                            const formData = new FormData();
                            formData.append(fieldName, file);

                            fetch('{{ route('uploadProjectFile') }}', {
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
                                } else {
                                    load(data.filePath); // Pass the uploaded file path to FilePond
                                    
                                    const fileItem = attachment.getFile(); // Get the latest file
                                    fileItem.file.id = data.fileId;
                                }
                            })
                            .catch(() => {
                                error('File upload failed');
                            });
                        }
                    }
                });

                attachment.on('removefile', async (error, file) => {
                    if (error) {
                        console.error('Error removing file:', error);
                        return;
                    }

                    // Get the file ID from the file object (make sure your FilePond files have the file ID available)
                    const fileId = file.file.id;                    

                    try {
                        const response = await fetch(`/project/temp-attachment/${fileId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'Content-Type': 'application/json',
                            }
                        });

                        if (response.ok) {
                            const data = await response.json();
                            console.log('File deleted successfully:', data.message);
                            // You can update the UI or take further actions here
                        } else {
                            const data = await response.json();
                            console.error('Failed to delete file:', data.message);
                        }
                    } catch (error) {
                        console.error('Error deleting file:', error);
                    }
                });
            },
        }
    }
</script>