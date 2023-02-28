<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartStatusResource;
use App\Models\PartStatus;
use Illuminate\Http\Request;

class PartStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PartStatusResource::collection(PartStatus::all());
        return response()->json([
            'success' => true,
            'message' => 'Data Part Status',
            'date' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = PartStatus::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Status Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartStatusResource(PartStatus::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = PartStatus::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Status Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartStatus::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Part Status Deleted'
        ]);
    }
}
