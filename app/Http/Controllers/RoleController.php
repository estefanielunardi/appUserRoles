<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function getAllRoles()
    {
        $roles = DB::table('roles')
                    ->paginate(6);
        return view('rolesPage', compact('roles'));
    }

    public function create()
    {
        return view('createRoleForm');
    }
    
    public function store(Request $request)
    {
        $role = Role::create([
            'title' => $request->title,
        ]);

        $role->save();

        return redirect('roles');
    }
   
    public function edit($id)
    {
        $role = Role::find($id);
        return view('editRole' , compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $role->title = $request->title;
        $role->save();
       
        return redirect('roles');
    }
   
    public function destroy($id)
    {
        DB::table('roles')
        ->where('id', $id)
        ->delete();
        
        return redirect('roles');
    }
}
