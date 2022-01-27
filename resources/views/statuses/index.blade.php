@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-4xl font-bold mb-4">My Status</h1>

            <a href="/statuses/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Status</a>
    
            @foreach($statuses as $status)
                <article class="mb-2">
                    <a href="/statuses/{{ $status->id }}/edit" class="text-xl font-bold text-blue-500">{{ $status->statusname }}</a>
                    <p class="text-md text-gray-600">{{ $status->slugname }}</p>
                    <p class="text-md text-gray-600">{{ $status->order }}</p>
                    <p class="text-md text-gray-600">{{ $status->userid }}</p>
    
                    <hr class="mt-2">
                </article>
            @endforeach
        </div>
    </div>
@endsection