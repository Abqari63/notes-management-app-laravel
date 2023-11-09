@extends('layouts.app')

@section('content')
    <div class="container flex flex-col gap-5 justify-center items-center">
        <h1 class="text-2xl font-semibold text-center">My Notes</h1>
        <table class="table mt-4 w-fit">
            <thead>
                <tr class="border-b border-gray-600 ">
                    <th class="bg-gray-100 p-2 px-10 text-left font-semibold">ID</th>
                    <th class="bg-gray-100 p-2 px-10 text-left font-semibold">Title</th>
                    <th class="bg-gray-100 p-2 px-10 text-left font-semibold">Description</th>
                    <th class="bg-gray-100 p-2 px-10 text-left font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $id = 1; @endphp
                @foreach ($notes as $note)
                    <tr class="border-b border-gray-600">
                        <td class="py-2 px-auto md:px-10 text-center">{{ $id }}</td>
                        <td class="py-2 px-auto md:px-10 text-left">{{ $note->title }}</td>
                        <td class="py-2 px-auto md:px-10 text-left">{{ $note->description }}</td>
                        <td class="flex p-2 text-left space-x-2">
                        <a href="{{ route('notes.edit', ['id' => $note->id]) }}"><button class="bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600 text-white"><i class="fa-solid fa-pen-to-square mx-2"></i>Edit</button></a>
                            <form action="{{ route('notes.destroy', ['id' => $note->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white px-4 py-2 rounded-lg hover:bg-red-600 bg-red-500"><i class="fa-solid fa-trash mx-2"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @php $id++; @endphp
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-center items-center">
            <form class="w-96 text-center my-10" action="{{ route('notes.create') }}" method="get">
                <button class="bg-blue-500 rounded-lg px-10 py-2 text-white font-bold text-lg" type="submit">Create Note</button>
            </form>
        </div>
    </div>
@endsection
