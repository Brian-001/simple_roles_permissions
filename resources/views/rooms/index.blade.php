@extends('layouts.app')

@section('content')
  <!-- Header Section -->
  <div class="relative h-[45vh]">
    <!-- Background Image with Opacity -->
    <div class="absolute inset-0">
      <img src="{{ asset('images/room1.jpg') }}" alt="Dish Image" class="object-cover w-full h-full opacity-70" />
    </div>

    <!-- Welcome Message -->
    <div class="absolute inset-0 bg-black/40 flex justify-center items-center">
      <div class="text-white text-center">
        <h1 class="text-4xl font-semibold mb-4 opacity-90">Welcome to relaxation</h1>
        <p class="text-lg opacity-80">Stay with us, and make every moment memorable. Book now.</p>
      </div>
    </div>

    <!-- Back Button -->
    <a href="/" class="absolute top-4 left-4 text-white hover:text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
      </svg>
    </a>
  </div>

  <!-- Dishes Section -->
  <div class="container mx-auto mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <!-- Repeat the following card structure for each dish -->

    @forelse ($rooms as $room )
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/' . $room->image_path) }}" alt="dish name" class="w-full h-40 object-cover" />
            <div class="p-4">
              <h2 class="text-xl font-semibold">{{ $room->room_name }}</h2>
              <p class="text-gray-600">{{ $room->room_description }}</p>
              <p class="mt-2 text-lg font-semibold text-green-600">Ksh {{ $room->room_price }}</p>
              <a href="#" class="block mt-4 px-4 py-2 bg-green-600 text-white text-center rounded-md hover:bg-green-700">Book</a>
            </div>
        </div>
    @empty
        <p class="text-center mb-4">Sorry no room available</p>
    @endforelse



  </div>
@endsection
