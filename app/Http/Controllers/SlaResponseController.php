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

        $input = SlaResponse::where('id', $id)->update($data);

        return response()->json([
            'message' => 'Update SLA Response Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SlaResponse::where('id', $id)->delete();

        return response()->json([
            'message' => 'Delete SLA Response Success'
        ]);
    }
}
