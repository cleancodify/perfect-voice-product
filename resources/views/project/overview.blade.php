<x-app-layout title="Project Overview" is-header-blur="true">
    <main class="w-full pb-8 main-content">
        <div class="py-[2rem] px-16">
            <div class="flex flex-col gap-5">
                @foreach($projects as $project)
                <div
                    class="w-full px-4 py-3 bg-white border-l-8 border-green-500 border-solid shadow-md border-1 rounded-2xl text-slate-700">
                    <div class="flex items-center justify-between">
                        <h2 class="mb-3 text-lg font-semibold">{{ $project->name }}</h2>
                        <div class="flex items-center">
                            <span class="text-tiny+ text-slate-500 mr-1">Deadline:</span>
                            <p class="text-sm">{{ $project->deadline }}</p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3">
                        <div>
                            <h3 class="mb-1 text-sm+ font-semibold">Medium</h3>
                            <p class="mb-2">{{ $project->medium }}</p>
                        </div>
                        <div>
                            <h3 class="mb-1 text-sm+ font-semibold">Tone of Voice</h3>
                            <p class="mb-2">{{ $project->tone_voice }}</p>
                        </div>
                        <div>
                            <h3 class="mb-1 text-sm+ font-semibold">Amount of Words</h3>
                            <p class="mb-2">{{ $project->amount_words }}</p>
                        </div>
                    </div>

                    <h3 class="mb-1 text-sm+ font-semibold">Instruction</h3>
                    <p>{{ $project->instruction }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</x-app-layout>