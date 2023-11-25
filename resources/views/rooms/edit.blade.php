@extends('layouts.admin')

@section('content')

    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('rooms.update', ['room' => $room->id]) }}" method="POST" enctype="multipart/form-data" class="w-full max-w-md px-4 py-3 bg-white rounded shadow-lg">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="block text-gray-700">Room Name</label>
                <input type="text" name="room_name" id="room_name" value="{{ $room->room_name }}" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="room_description" id="room_description" rows="4" class="w-full px-2 py-1 border rounded">{{ $room->room_description }}</textarea>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="room_price" id="room_price" value="{{$room ->room_price}}" step="0.01" class="w-full px-2 py-1 border rounded">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex space-x-2">
                <div class="mb-2 h-16 w-16">
                    <img src="{{ asset('storage/' . $room->image_path) }}" alt="">
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
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded">Update Room</button>
            </div>
        </form>
    </div>

@endsection
