@extends('layouts.admin')

@section('content')

    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('tables.store') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-md px-4 py-3 bg-white rounded shadow-lg">
            @csrf

            <div class="mb-3">
                <label for="name" class="block text-gray-700">Table Name</label>
                <input type="text" name="table_name" id="table_name" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="table_description" id="table_description" rows="4" class="w-full px-2 py-1 border rounded"></textarea>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="table_price" id="table_price" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="file" class="block text-gray-700">Upload Image</label>
                <input type="file" name="image_path" id="image_path">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
             </div>

            <div class="mb-4">
                <button type="submit" class="w-full px-4 py-2 bg-gray-800 text-white rounded">Create Table</button>
            </div>
        </form>
    </div>

@endsection
