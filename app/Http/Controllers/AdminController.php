<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Room;
use App\Models\Table;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admins.index');
    }

    //Displays Dishes created in admin_dish.blade.php in a table
    public function adminDish()
    {
        $dishes = Dish::all();
        return view('admins.admin_dish', ['adminDish' => $dishes]);
    }

    //Displays Rooms created in admin_room.blade.php in a table
    public function adminRoom()
    {
        $rooms = Room::all();
        return view('admins.admin_room', ['adminRoom'=> $rooms]);
    }

    //Displays Tables created in admin_table.blade.php in a table
    public function adminTable()
    {
        $tables = Table::all();
        return view('admins.admin_table', ['adminTable' => $tables]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
