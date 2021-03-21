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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        DB::table('roles')
        ->where('id', $id)
        ->delete();
        
        return redirect('roles');
    }
}
