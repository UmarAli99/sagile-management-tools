@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form method="POST" action="/statuses">
                @csrf
    
                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="statusname">Status name: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="statusname" name="statusname">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="slugname">Slug name: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="slugname" name="slugname">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="order">Order: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="order" name="order">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="userid">User ID: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="userid" name="userid">
                </div>
                
                <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
                <a href="/statuses" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
            </form>
        </div>
    </div>
@endsection