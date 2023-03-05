<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartLocationResource;
use App\Models\PartLocation;
use Illuminate\Http\Request;

class PartLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part Location',
            'date' => PartLocationResource::collection(PartLocation::all())
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
            'user_id' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartLocation::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Location Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartLocationResource(PartLocation::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'user_id' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartLocation::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Location Success',
            'data' => new PartLocationResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartLocation::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Location Success'
        ]);
    }
}
