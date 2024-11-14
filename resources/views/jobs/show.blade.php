<x-layout>
    <x-slot:title>
        Job Page
    </x-slot:title>
    <section class="space-y-4">
        <div>
            <h1 class="text-xl font-bold text-indigo-500"> {{ $job->title }} </h1>
            <p> Pays with {{ $job->salary }} </p>

        </div>
        <hr />
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="hover:underline text-sm/6 font-semibold text-gray-900">Go Back To Jobs</a>
            <a href="/jobs/{{ $job->id }}/edit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
        </div>
    </section>
</x-layout>
