<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = User::with('roles')
                    ->get();

        return view('usersPage', compact('users'));
    }
}
