<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartTransferResource;
use App\Models\PartTransfer;
use Illuminate\Http\Request;

class PartTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PartTransferResource::collection(PartTransfer::all());
        return response()->json([
            'success' => true,
            'message' => 'Data Part Transfer',
            'date' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'part_transfer_no' => 'required',
            'location_id' => 'required',
            'part_type_id' => 'required',
            'part_type_name' => 'required',
            'part_no' => 'required',
            'part_sn' => 'required',
            'quantity' => 'required',
            'last_part_status_id' => 'required',
            'notes' => 'string',
            'updated_by' => 'required'
        ]);

        $input = PartTransfer::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Transfer Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartTransferResource(PartTransfer::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'part_transfer_no' => 'required',
            'location_id' => 'required',
            'part_type_id' => 'required',
            'part_type_name' => 'required',
            'part_no' => 'required',
            'part_sn' => 'required',
            'quantity' => 'required',
            'last_part_status_id' => 'required',
            'notes' => 'string',
            'updated_by' => 'required'
        ]);

        $input = PartTransfer::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Transfer Success',
            'data' => new PartTransferResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartTransfer::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Part Transfer Deleted'
        ]);
    }
}

