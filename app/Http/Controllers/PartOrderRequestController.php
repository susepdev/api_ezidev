<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartOrderRequestResource;
use App\Models\PartOrderRequest;
use Illuminate\Http\Request;

class PartOrderRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part Order Request',
            'date' => PartOrderRequestResource::collection(PartOrderRequest::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'part_order_request_no' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'quantity' => 'required',
            'notes' => 'required',
            'supporting_doc' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartOrderRequest::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Order Request Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartOrderRequestResource(PartOrderRequest::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'part_order_request_no' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'quantity' => 'required',
            'notes' => 'required',
            'supporting_doc' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartOrderRequest::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Order Request Success',
            'data' => new PartOrderRequestResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartOrderRequest::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Part Order Request Deleted'
        ]);
    }
}
