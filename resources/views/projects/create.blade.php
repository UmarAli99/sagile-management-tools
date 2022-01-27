@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form method="POST" action="/projects">
                @csrf
    
                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="title">Title: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
                </div>
    
                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="description">Description: </label>
                    <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="description" name="description"></textarea>
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="startdate">Start date: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="startdate" name="startdate">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="enddate">End date: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="enddate" name="enddate">
                </div>
    
                <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
                <a href="/projects" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
            </form>
        </div>
    </div>
@endsection