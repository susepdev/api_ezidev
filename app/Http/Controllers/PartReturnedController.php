<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartReturnedResource;
use App\Models\PartReturned;
use Illuminate\Http\Request;

class PartReturnedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part Returned',
            'date' => PartReturnedResource::collection(PartReturned::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'rr_ticket_no' => 'required',
            'part_name' => 'required',
            'part_sn' => 'required',
            'part_no' => 'required',
            'part_return_notes' => 'required',
            'part_return_date' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartReturned::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Returned Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartReturnedResource(PartReturned::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'rr_ticket_no' => 'required',
            'part_name' => 'required',
            'part_sn' => 'required',
            'part_no' => 'required',
            'part_return_notes' => 'required',
            'part_return_date' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartReturned::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Returned Success',
            'data' => new PartReturnedResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartReturned::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Returned Success'
        ]);
    }
}