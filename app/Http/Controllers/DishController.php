<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dishes = Dish::all();
        return view('dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'dish_name' => 'required|string|max:255',
            'dish_price' => 'required|numeric|min:0',
            'dish_description' => 'required|string',
            'image_path' => 'required|image',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images');
            $validatedData['image_path'] = str_replace('public/', '', $imagePath);
        }

        Dish::create($validatedData);
        return redirect(route('admins.index'))->with('Success', 'Dish created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $dish = Dish::findOrFail($id);

        return view('dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $dish = Dish::findOrFail($id);

        return view('dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $dish = Dish::findOrFail($id);
        $validatedData = $request->validate([
            'dish_name' => 'required|string|max:255',
            'dish_price' => 'required|numeric|min:0',
            'dish_description' => 'required|string',
            'image_path' => 'image',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images');
            $validatedData['image_path'] = str_replace('public/', '', $imagePath);
        }
        $dish->update($validatedData);
        return redirect(route('admins.admin_dish'))->with('Success', 'Dishes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dish = Dish::findOrFail($id);
        $dish->delete();
        
        return redirect(route('admins.admin_dish'))->with('Success', 'Dish deleted successfully');

    }
}
