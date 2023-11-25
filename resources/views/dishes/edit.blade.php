@extends('layouts.admin')

@section('content')

    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('dishes.update', ['dish' => $dish->id]) }}" method="POST" enctype="multipart/form-data" class="w-full max-w-md px-4 py-3 bg-white rounded shadow-lg">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="block text-gray-700">Dish Name</label>
                <input type="text" name="dish_name" id="dish_name" value="{{ $dish->dish_name }}" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="dish_description" id="dish_description"  rows="4" class="w-full px-2 py-1 border rounded">{{ $dish->dish_description }}</textarea>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="dish_price" id="dish_price" min="0.00" value="{{ $dish->dish_price }}" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex">
                <!-- Preview for image -->
                <div class="mb-2 h-16 w-16">
                    <img src="{{ asset('storage/' . $dish->image_path) }}" alt="">
                </div>
                <div class="mb-4">
                    <label for="file" class="block text-gray-700">Upload Image</label>
                    <input type="file" name="image_path" id="image_path">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="mb-4">
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded">Update Dish</button>
            </div>
        </form>
    </div>

@endsection
