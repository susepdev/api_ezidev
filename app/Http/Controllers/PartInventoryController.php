<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartInventoryResource;
use App\Models\PartInventory;
use Illuminate\Http\Request;

class PartInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PartInventoryResource::collection(PartInventory::all());
        return response()->json([
            'success' => true,
            'message' => 'Data Part Inventory',
            'date' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'part_no' => 'required',
            'part_name' => 'required',
            'part_desc' => 'string',
            'machine_model' => 'required',
            'part_type' => 'required',
            'part_sn' => 'required',
            'part_status' => 'required',
            'part_location' => 'required',
            'bin_location' => 'required',
            'quantity' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartInventory::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Inventory Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartInventoryResource(PartInventory::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'part_no' => 'required',
            'part_name' => 'required',
            'part_desc' => 'string',
            'machine_model' => 'required',
            'part_type' => 'required',
            'part_sn' => 'required',
            'part_status' => 'required',
            'part_location' => 'required',
            'bin_location' => 'required',
            'quantity' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartInventory::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Inventory Success',
            'data' => new PartInventoryResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartInventory::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Part Inventory Deleted'
        ]);
    }
}

