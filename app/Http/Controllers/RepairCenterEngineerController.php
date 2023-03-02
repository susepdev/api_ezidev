<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RepairCenterEngineerResource;
use App\Models\RepairCenterEngineer;
use Illuminate\Http\Request;

class RepairCenterEngineerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => "Data Repair Center Engineer",
            'data' => RepairCenterEngineerResource::collection(RepairCenterEngineer::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'rce_id' => 'required',
            'alias' => 'required',
            'name' => 'required',
            'is_active' => 'required',
            'time_zone_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = RepairCenterEngineer::create($data);

        return response()->json([
            'success' => true,
            'message' => "Create Repair Center Engineer Success",
            'date' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new RepairCenterEngineerResource(RepairCenterEngineer::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'alias'=> 'required',
            'name'=> 'required',
            'is_active'=> 'required',
            'updated_by'=> 'required',
        ]);

        $input = RepairCenterEngineer::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Repair Center Engineer Success',
            'data' => new RepairCenterEngineerResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RepairCenterEngineer::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Repair Center Engineer Success'
        ]);
    }
}
