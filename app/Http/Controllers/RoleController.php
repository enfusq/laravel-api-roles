<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Role::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->require([
            'name' => 'required|max:255'
        ]);

        $role = Role::create([
            'name' => $request->name
        ]);

        return $role;
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return $role;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->require([
            'name' => 'required|max:255'
        ]);

        $role->update([
            'name' => $request->name
        ]);

        return $role;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return ['message' => "The post ($role->id) has been deleted"];
    }
}
