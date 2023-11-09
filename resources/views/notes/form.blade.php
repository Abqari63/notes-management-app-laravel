@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4 mt-8">
        <h1 class="text-4xl my-5 font-bold text-center">{{ isset($note) ? 'Edit Note' : 'Create Note' }}</h1>
        <form class="w-full md:w-96 mx-auto p-10 shadow-lg shadow-gray-500" action="{{ isset($note) ? route('notes.update', ['id' => $note->id]) : route('notes.store') }}" method="POST" class="mt-4">
            @csrf
            @if (isset($note))
                @method('PUT')
            @endif
            <div class="my-2">
                <label for="title" class="block text-center text-gray-600 text-2xl font-semibold mb-3">Title</label>
                <input type="text" id="title" name="title" class="border rounded p-2 w-full" value="{{ isset($note) ? $note->title : old('title') }}">
            </div>
            <div class="my-2">
                <label for="description" class="block text-center text-gray-600 text-2xl font-semibold mb-3">Description</label>
                <textarea id="description" name="description" class="border rounded p-2 w-full" rows="4">{{ isset($note) ? $note->description : old('description') }}</textarea>
            </div>
            <div class="my-2">
                <button id="saveButton" type="submit" class="w-full bg-gradient-to-b from-blue-500 to-blue-600 hover:bg-gradient-to-b hover:from-blue-600 hover:to-blue-500 text-xl text-white py-2 px-6 rounded-lg">Save</button>
            </div>
        </form>
    </div>
@endsection
