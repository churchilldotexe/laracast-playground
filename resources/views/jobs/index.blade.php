<x-layout>
    <x-slot:title>
        About Page
    </x-slot:title>
    <div class="space-x-2">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <article class="rounded-md shadow-md border border-gray-500 p-2 space-y-2">
                    <h2 class='text-blue-700 font-semibold'>{{ $job->employer['name'] }}</h2>
                    <p>
                        <strong>
                            {{ $job['title'] }}
                        </strong>
                        : Pays with {{ $job['salary'] }}
                    </p>
                </article>
            </a>
        @endforeach

        {{ $jobs->links() }}
    </div>
</x-layout>
