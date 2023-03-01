<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ManagerResource;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Manager',
            'date' => ManagerResource::collection(Manager::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'mgr_id' => 'required',
            'alias' => 'required',
            'name' => 'required',
            'is_active' => 'required',
            'time_zone_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Manager::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Manager Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ManagerResource(Manager::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'mgr_id' => 'required',
            'alias' => 'required',
            'name' => 'required',
            'is_active' => 'required',
            'time_zone_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Manager::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Manager Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Manager::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Manager Success'
        ]);
    }
}
