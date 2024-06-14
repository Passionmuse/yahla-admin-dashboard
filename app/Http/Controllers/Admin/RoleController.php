<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view("content.settings.roles.index", compact("roles", "permissions"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        $validated = $request->validated();
  
        $role = Role::create($validated);
        $role->syncPermissions($validated['permissions']?? []);

        return back()->with("success", "Role successfully created.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, $id)
    {
        $validated = $request->validated();

        $role = Role::find($id);
        if ($role->name === 'Super Admin')
            abort(403);
        $role->fill($validated);
        $role->syncPermissions($validated['permissions']?? []);
        $role->save();

        return back()->with("success", "Role successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        if ($role->name === 'Super Admin')
            abort(403);
        $role->delete();

        return back()->with("success", "Role successfully deleted.");
    }
}
