@extends('layouts.app')

@section('content')
    <nav class="bg-blue-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-bold text-xl inline-flex">
                <img src="" alt="" class="h-10 w-auto">
                <h1>Hotel Management System</h1>
            </div>
            <ul class="flex space-x-6 text-white" >
                <li><a href="#" class="hover:text-gray-200">Home</a></li>
                <li><a href="{{ route('dishes.index')}}" class="hover:text-gray-200">Dishes</a></li>
                <li><a href="{{ route('tables.index')}}" class="hover:text-gray-200">Tables</a></li>
                <li><a href="{{ route('rooms.index')}}" class="hover:text-gray-200">Rooms</a></li>
                <li><a href="#" class="hover:text-gray-200">Login</a></li>
                <li><a href="#" class="hover:text-gray-200">Register</a></li>
            </ul>
        </div>
    </nav>

    <!-- Banner -->
    <header class="bg-blue-600 text-white py-16 px-4">
        <div class="container mx-auto flex items-center">
            <div class="w-1/2">
                <h1 class="text-4xl font-semibold mb-4">Welcome to Our Hotel</h1>
                <p class="text-lg">Experience luxury like never before.</p>
            </div>
            <div class="w-1/2">
                <img src="{{ asset('images/cover.jpg') }}" alt="Hotel Cover" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </header>

    <!-- Rooms Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-8">Our Rooms</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Room Cards -->
                <div class="bg-white rounded-lg p-4 shadow-md">
                    <img src="{{ asset('images/room1.jpg') }}" alt="Room 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-2">Luxury Suite</h3>
                    <p class="text-gray-600">Spacious and elegant suite with a view.</p>
                    <p class="text-blue-500 font-semibold mt-2">$250/night</p>
                </div>

                <div class="bg-white rounded-lg p-4 shadow-md">
                    <img src="{{ asset('images/room2.jpg') }}" alt="Room 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-2">Luxury Suite</h3>
                    <p class="text-gray-600">Spacious and elegant suite with a view.</p>
                    <p class="text-blue-500 font-semibold mt-2">$230/night</p>
                </div>

                <div class="bg-white rounded-lg p-4 shadow-md">
                    <img src="{{ asset('images/room3.jpg') }}" alt="Room 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-2">Luxury Suite</h3>
                    <p class="text-gray-600">Spacious and elegant suite with a view.</p>
                    <p class="text-blue-500 font-semibold mt-2">$150/night</p>
                </div>
                <!-- Add more room cards here -->
            </div>
        </div>
    </section>

    <!-- Dishes Section -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-8">Our Dishes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Dish Cards -->
                <div class="bg-white rounded-lg p-4 shadow-md">
                    <img src="{{ asset('images/dish1.jpg') }}" alt="Dish 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-2">Gourmet Delight</h3>
                    <p class="text-gray-600">Exquisite dishes prepared by our world-class chefs.</p>
                    <p class="text-blue-500 font-semibold mt-2">$20 per dish</p>
                </div>

                <div class="bg-white rounded-lg p-4 shadow-md">
                    <img src="{{ asset('images/dish2.jpg') }}" alt="Dish 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-2">Gourmet Delight</h3>
                    <p class="text-gray-600">Exquisite dishes prepared by our world-class chefs.</p>
                    <p class="text-blue-500 font-semibold mt-2">$45 per dish</p>
                </div>
                <!-- Add more dish cards here -->
            </div>
        </div>
    </section>

    <!-- Table Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-8">Our Tables</h2>
            <div class="grid grid-cols-2 gap-6">
                <!-- Table Cards -->
                <div class="bg-white rounded-lg p-4 shadow-md">
                <img src="{{ asset('images/table1.jpg') }}" alt="Dish 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold">Fine Dining</h3>
                    <p class="text-gray-600">Reserve your table for an unforgettable dining/meeting experience.</p>
                </div>

                <div class="bg-white rounded-lg p-4 shadow-md">
                <img src="{{ asset('images/table2.jpg') }}" alt="Dish 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold">Fine Dining</h3>
                    <p class="text-gray-600">Reserve your table for an unforgettable dining/meeting experience.</p>
                </div>
                <!-- Add more table cards here if needed -->
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-blue-500 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Hotel Management System by Joseph Kariuki</p>
        </div>
    </footer>

@endsection
