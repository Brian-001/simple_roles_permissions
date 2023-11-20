@extends('layouts.admin')

@section('content')
    <div class="flex justify-end mb-4">
        <a href="{{ route('dishes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create Dish
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Dish Id
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Description
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($adminDish as $dish )
                   <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $dish->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $dish->dish_name }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $dish->dish_description }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $dish->dish_price }}
                        </td>
                    </tr>

                @empty
                    <p class="text-center mb-4">Sorry no dish that have been created.</p>
                @endforelse

            </tbody>
        </table>
    </div>

@endsection
