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

    public function attachRoleToUser($id)
    {
        $user_id=auth()->id(); 
        $user=User::find($user_id);
        $userRoles=$user->roles()->find($id);

        if($userRoles==null){
            $user->roles()->attach($id);
            $roles=$user->roles()->get();

            return redirect('users');
        }

        return redirect('users', compact('roles'), ['message'=>'Oh no! you already have this role']);
    }

    public function detachRoleFromUser($id)
    {
        $user_id=auth()->id();   
        $user=User::find($user_id);
        $user->roles()->detach($id);

        $roles=$user->roles()->get();

        return redirect('users'); 
    }
    
}
