<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreTeamMemberRequest;
use App\Http\Requests\UpdateTeamMemberRequest;
use PhpParser\Node\Expr\FuncCall;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_admin_user', true)->get();
        $roles = Role::all();
        return view("content.settings.team_members.index", compact("users", "roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamMemberRequest $request)
    {
        $validated = $request->validated();
        $validated['image'] = $request->image??null;
        // $imagePath = null;
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->image??'';
        //     $validated["image"] = $imagePath;
        // }

        $validated['is_admin_user'] = true;
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        $roles = array_map(fn($role) => $role->name, json_decode($validated['roles']));
        $user->syncRoles($roles);

        return back()->with("success", "Team member successfully added.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamMemberRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['image'] = $request->image??null;

        $user = User::find($id);
        if (! ($validated['password']?? null)) {
            $validated['password'] = $user->password;
        } else {
            $validated['password'] = Hash::make($validated['password']);
        }
        $user->fill($validated);
        $user->save();

        $roles = array_map(fn($role) => $role->name, json_decode($validated['roles']));
        $user->syncRoles($roles);

        return back()->with("success", "Team member successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        // Delete Image
        if ($user->image)
            Storage::delete($user->image);
            
        $user->delete();

        return back()->with("success", "Team member successfully deleted.");
    }




}
