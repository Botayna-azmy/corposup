@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center flex-col w-full">
    <div class="flex justify-between items-center bg-white p-4 mb-4  w-full">
            <!-- Breadcrumb -->
            <div class="text-gray-700 text-lg">
                <a href="#" class="text-blue-600 hover:underline">Dashboard</a> / <a href="{{route('dashboard.store.index')}}" class="text-blue-600 hover:underline">Store</a> / <a href="#" class="text-blue-600 hover:underline">Create</a>
            </div>
    </div>
    <div class="w-full bg-white p-8 ">
        <h2 class="text-2xl font-bold mb-6">Create New Store</h2>

        <!-- Affichage des erreurs de validation -->
        @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.store.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Store Name:</label>
                <input type="text" name="name" id="name" class="w-full mt-2 p-2 border rounded-md" value="{{ old('name') }}">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description" class="w-full mt-2 p-2 border rounded-md">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700">Image:</label>
                <input type="file" name="image" id="image" class="w-full mt-2 p-2 border rounded-md">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Create Store</button>
            </div>
        </form>
    </div>
</div>
@endsection
