<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorkStatusResource;
use App\Models\WorkStatus;
use Illuminate\Http\Request;

class WorkStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Work Status',
            'data' => WorkStatusResource::collection(WorkStatus::all())
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
            'updated_by' => 'required'
        ]);

        $input = WorkStatus::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Work Status Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new WorkStatusResource(WorkStatus::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'updated_by' => 'required'
        ]);

        $input = WorkStatus::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Work Status Success',
            'data' => new WorkStatusResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = WorkStatus::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Work Status Success'
        ]);
    }
}
