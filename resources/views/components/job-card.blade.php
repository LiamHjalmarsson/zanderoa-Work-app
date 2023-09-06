<x-card class="mb-4">
    <div class="flex justify-between mb-4">
        <h1 class="text-lg font-medium">
            {{ $job->title }}
        </h1>
        <div class="text-slate-500">
            Yearly salary ${{ number_format($job->salary) }}
        </div>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-4 items-center">
            <div>
                Company : {{ $job->employer->company_name }}
            </div>
            <div>
                Location : {{ $job->location }}
            </div>
            @if ($job->deleted_at)
                <span class="text-sm text-red-500">
                    Deleted
                </span>
            @endif
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag>
                <a href="{{ route('jobs.index', ['experience' => $job->experience]) }}">
                    {{ Str::ucfirst($job->experience) }}
                </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index', ['category' => $job->category]) }}">
                    {{ $job->category }}
                </a>
            </x-tag>
        </div>
    </div>

    {{ $slot }}
    
</x-card>