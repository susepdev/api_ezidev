<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartScrapResource;
use App\Models\PartScrap;
use Illuminate\Http\Request;

class PartScrapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PartScrapResource::collection(PartScrap::all());
        return response()->json([
            'success' => true,
            'message' => 'Data Part Scrap',
            'date' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'part_scrap_no' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'quantity' => 'required',
            'last_part_status_id' => 'required',
            'notes' => 'string',
            'updated_by' => 'required'
        ]);

        $input = PartScrap::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Scrap Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartScrapResource(PartScrap::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'part_scrap_no' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'quantity' => 'required',
            'last_part_status_id' => 'required',
            'notes' => 'string',
            'updated_by' => 'required'
        ]);

        $input = PartScrap::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Scrap Success',
            'data' => new PartScrapResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartScrap::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Part Scrap Deleted'
        ]);
    }
}

