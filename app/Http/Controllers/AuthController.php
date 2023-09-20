<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Enums\RoleName;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showRegistrationForm(){
        // Retrieve the list of roles for the registration view
    $roles = Role::where('name', '!=', RoleName::ADMIN)->get();

    return view('auth.register', compact('roles'));
    }
}
