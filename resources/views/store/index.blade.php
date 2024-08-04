@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center items-center bg-white p-4 w-full">

    <div class="flex justify-between items-center  p-4 mb-4  w-full">
        <!-- Breadcrumb -->
        <div class="text-gray-700 text-lg">
            <a href="#" class="text-blue-600 hover:underline">Dashboard</a> / <a href="#" class="text-blue-600 hover:underline">Store</a>
        </div>
        <!-- Create New Store Button -->
        <a href="{{ route('dashboard.store.create') }}" class="bg-orange-600 text-white px-4 py-2 rounded-md hover:bg-orange-700 transition duration-300">Create New Store</a>
    </div>

    @if($stores->isEmpty())
        <div class="text-center w-full min-h-screen flex bg-white justify-center items-center">
            <p class="text-gray-600 text-lg">Il n'y a pas de store.</p>
        </div>
    @elseif($stores->count() == 1)
        <div class=" w-full min-h-screen bg-white py-8 flex justify-center items-center">
            <!-- Single Store Card -->
            <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                <!-- Image -->
                <img class="h-40 object-cover rounded-xl" src="{{ $stores[0]->image_url }}" alt="Image">
                <div class="p-2">
                    <!-- Heading -->
                    <h2 class="font-bold text-lg mb-2">{{ $stores[0]->name }}</h2>
                    <!-- Description -->
                    <p class="text-sm text-gray-600">{{ $stores[0]->description }}</p>
                </div>
                <!-- CTA -->
                <div class="m-2 flex justify-between">
                    <a role="button" href="{{ route('dashboard.store.edit', $stores[0]->id) }}" class="text-white bg-green-600 px-3 py-1 rounded-md hover:bg-blue-700">UPDATE</a>
                    <a role="button" href="{{ route('dashboard.store.destroy', $stores[0]->id) }}" class="text-white bg-red-600 px-3 py-1 rounded-md hover:bg-blue-700">DELETE</a>
                </div>
            </div>
        </div>
    @else
        <div class="bg-white w-full flex flex-wrap gap-4 justify-center items-center">
            @foreach($stores as $store)
                <!-- Store Card -->
                <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                    <!-- Image -->
                    <img class="h-40 object-cover rounded-xl" src="{{ $store->image_url }}" alt="Image">
                    <div class="p-2">
                        <!-- Heading -->
                        <h2 class="font-bold text-lg mb-2">{{ $store->name }}</h2>
                        <!-- Description -->
                        <p class="text-sm text-gray-600">{{ $store->description }}</p>
                    </div>
                    <!-- CTA -->
                    <div class="m-2 flex justify-between">
                        <a role="button" href="{{ route('dashboard.store.edit', $store->id) }}" class="text-white bg-green-600 px-3 py-1 rounded-md hover:bg-blue-700">UPDATE</a>
                        <a role="button" href="{{ route('dashboard.store.destroy', $store->id) }}" class="text-white bg-red-600 px-3 py-1 rounded-md hover:bg-blue-700">DELETE</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
