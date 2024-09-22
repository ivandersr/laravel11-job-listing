<x-layout>
    <x-slot:heading>
        Jobs listing
    </x-slot:heading>
    <h1>Hello from Jobs Page</h1>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}">
                <strong>{{ $job['title'] }}:</strong> {{ $job['salary'] }}
            </a>
        </li>
    @endforeach
</x-layout>
