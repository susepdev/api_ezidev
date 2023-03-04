<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartUsageResource;
use App\Models\PartUsage;
use Illuminate\Http\Request;

class PartUsageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part Usage',
            'date' => PartUsageResource::collection(PartUsage::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'rr_ticket_no' => 'required',
            'part_name' => 'required',
            'part_quantity' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartUsage::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Usage Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartUsageResource(PartUsage::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'rr_ticket_no' => 'required',
            'part_name' => 'required',
            'part_quantity' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartUsage::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Usage Success',
            'data' => new PartUsageResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartUsage::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Usage Success'
        ]);
    }
}
