@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-4xl font-bold mb-4">My Performance Feature</h1>

            <a href="/performancefeatures/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Performance Feature</a>
    
            @foreach($performancefeatures as $performancefeature)
                <article class="mb-2">
                    <a href="/performancefeatures/{{ $performancefeature->id }}/edit" class="text-xl font-bold text-blue-500">{{ $performancefeature->featureid }}</a>
                    <p class="text-md text-gray-600">{{ $performancefeature->featurename }}</p>
                    <hr class="mt-2">
                </article>
            @endforeach
        </div>
    </div>
@endsection