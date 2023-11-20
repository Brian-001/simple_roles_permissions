<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'room_name' => 'required|string|max:255',
            'room_price' => 'required|numeric|min:0',
            'room_description' => 'required|string',
            'image_path' => 'required|image',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images');
            $validatedData['image_path'] = str_replace('public/', '', $imagePath);
        }

        Room::create($validatedData);
        return redirect(route('admins.index'))->with('Success', 'Room created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $room = Room::findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $room = Room::findOrFail($id);
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $room = Room::findOrFail($id);
        $validatedData = $request->validate([
            'room_name' => 'required|string|max:255',
            'room_price' => 'required|numeric|min:0',
            'room_description' => 'required|string',
            'image_path' => 'required|image',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images');
            $validatedData['image_path'] = str_replace('public/', '', $imagePath);
        }
        $room->update($validatedData);
        return redirect(route('admins.index'))->with('Success', 'Rooms updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $room = Room::findOrFail($id);
        return redirect(route('rooms.index'))->with('Success', 'Room deleted successfully');
    }
}
