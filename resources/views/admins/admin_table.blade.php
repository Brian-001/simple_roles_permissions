@extends('layouts.admin')

@section('content')
    <div class="flex justify-end mb-4">
        <a href="{{ route('tables.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create Table
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Table Id
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
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($adminTable as $table )
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $table->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $table->table_name }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $table->table_description }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $table->table_price }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex space-x-2">
                                <a href="{{route('tables.edit', ['table'=>$table->id])}}" class="py-2 px-1 bg-green-500 hover:bg-green-700 rounded text-white">Edit</a>
                                <form action="{{route('tables.destroy', ['table'=>$table->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-2 px-1 bg-red-500 hover:bg-red-700 rounded text-white">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <p class="text-center mb-4">Sorry, No table available</p>
                @endforelse

            </tbody>
        </table>
    </div>

@endsection
