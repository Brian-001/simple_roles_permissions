<?php

namespace App\Http\Controllers;


use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tables = Table::all();
        return view('tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tables.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'table_name' => 'required|string|max:255',
            'table_price' => 'required|numeric|min:0',
            'table_description' => 'required|string',
            'image_path' => 'required|image',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images');
            $validatedData['image_path'] = str_replace('public/', '', $imagePath);
        }

        Table::create($validatedData);
        return redirect(route('admins.index'))->with('Success', 'Table created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $table = Table::findOrFail($id);
        return view('tables.show', compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $table = Table::findOrFail($id);
        return view('tables.edit', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $table = Table::findOrFail($id);
        $validatedData = $request->validate([
            'table_name' => 'required|string|max:255',
            'table_price' => 'required|numeric|min:0',
            'table_description' => 'required|string',
            'image_path' => 'image',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images');
            $validatedData['image_path'] = str_replace('public/', '', $imagePath);
        }
        $table->update($validatedData);
        return redirect(route('admins.admin_table'))->with('Success', 'Table updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $table = Table::findOrFail($id);
        $table->delete();
        return redirect(route('admins..admin_table'))->with('Success', 'Table deleted successfully');
    }
}
