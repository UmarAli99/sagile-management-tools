@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-4xl font-bold mb-4">My Project</h1>

            <a href="/projects/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Project</a>
    
            @foreach($projects as $project)
                <article class="mb-2">
                    <a href="/projects/{{ $project->id }}/edit" class="text-xl font-bold text-blue-500">{{ $project->title }}</a>
                    <p class="text-md text-gray-600">{{ $project->description }}</p>
                    <p class="text-md text-gray-600">{{ $project->startdate }}</p>
                    <p class="text-md text-gray-600">{{ $project->enddate }}</p>
                    <hr class="mt-2">
                </article>
            @endforeach
        </div>
    </div>
@endsection