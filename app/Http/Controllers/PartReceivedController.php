<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartReceivedResource;
use App\Models\PartReceived;
use Illuminate\Http\Request;

class PartReceivedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part Received',
            'date' => PartReceivedResource::collection(PartReceived::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'pr_ticket_no' => 'required',
            'rr_ticket_no' => 'required',
            'part_order_request_no' => 'required',
            'supplier_id' => 'required',
            'supplier_name' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'part_sn' => 'required',
            'quantity' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartReceived::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Received Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartReceivedResource(PartReceived::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'pr_ticket_no' => 'required',
            'rr_ticket_no' => 'required',
            'part_order_request_no' => 'required',
            'supplier_id' => 'required',
            'supplier_name' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'part_sn' => 'required',
            'quantity' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartReceived::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Received Success',
            'data' => new PartReceivedResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartReceived::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Received Success'
        ]);
    }
}
