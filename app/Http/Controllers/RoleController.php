<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RoleResource::collection(Role::all());
        
        return response()->json([
            'success' => true,
            'message' => 'Data Role',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Role::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Role Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = new RoleResource(Role::findOrFail($id));

        return response()->json([
            'success' => true,
            'message' => 'Show Role',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Role::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Updated Role Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Role::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Role Success'
        ]);
    }
}
