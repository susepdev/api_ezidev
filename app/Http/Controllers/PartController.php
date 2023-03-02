<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartResource;
use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part',
            'data' => PartResource::collection(Part::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'part_no' => 'required',
            'part_sn' => 'required',
            'desc' => 'required',
            'bin_location_id' => 'required',
            'part_status_id' => 'required',
            'repaired_part_status_id' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Part::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Part Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartResource(Part::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'part_no' => 'required',
            'part_sn' => 'required',
            'desc' => 'required',
            'bin_location_id' => 'required',
            'part_status_id' => 'required',
            'repaired_part_status_id' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Part::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Success',
            'data' => new PartResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Part::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Success'
        ]);
    }
}