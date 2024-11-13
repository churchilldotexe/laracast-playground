<x-layout>
    <x-slot:title>
        Job Page
    </x-slot:title>
    <section class="space-y-2">
        <h1 class="text-xl font-bold text-indigo-500"> {{ $job['title'] }} </h1>
        <p> Pays with {{ $job['salary'] }} </p>
    </section>
    </ul>
</x-layout>
