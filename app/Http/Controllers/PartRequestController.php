<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartRequestResource;
use App\Models\PartRequest;
use Illuminate\Http\Request;

class PartRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part Request',
            'date' => PartRequestResource::collection(PartRequest::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'prt_no' => 'required',
            'sot_no' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartRequest::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Request Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartRequestResource(PartRequest::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'prt_no' => 'required',
            'sot_no' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartRequest::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Request Success',
            'data' => new PartRequestResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartRequest::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Request Success'
        ]);
    }
}
