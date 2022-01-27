@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form method="POST" action="/codingstandards/{{ $codingstandard->id }}">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="codingid">Coding ID: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="codingid" name="codingid" value="{{ $codingstandard->codingid }}">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="featuretitle">Feature title: </label>
                    <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="featuretitle" name="featuretitle">{{ $codingstandard->featuretitle }}</textarea>
                </div>

                <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
                <a href="/codingstandards" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
            </form>
            
            <form method="POST" action="/codingstandards/{{ $codingstandard->id }}">
                @csrf
                @method('DELETE')

                <button class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button>
            </form>
        </div>
    </div>
@endsection