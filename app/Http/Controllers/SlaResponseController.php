<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\SlaResponseResource;
use App\Models\SlaResponse;
use Illuminate\Http\Request;

class SlaResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data SLA Response',
            'date' => SlaResponseResource::collection(SlaResponse::all())
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

        $input = SlaResponse::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create SLA Response Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SlaResponseResource(SlaResponse::FindOrFail($id));
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

        $input = SlaResponse::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update SLA Response Success',
            'data' => new SlaResponseResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SlaResponse::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete SLA Response Success'
        ]);
    }
}
