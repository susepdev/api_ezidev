<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RepairedPartStatusResource;
use App\Models\RepairedPartStatus;
use Illuminate\Http\Request;

class RepairedPartStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => "Data Repaired Part Status",
            'data' => RepairedPartStatusResource::collection(RepairedPartStatus::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'sq_no' => 'required',
            'desc' => 'required',
            'date_created' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = RepairedPartStatus::create($data);

        return response()->json([
            'success' => true,
            'message' => "Create Repaired Part Status Success",
            'date' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new RepairedPartStatusResource(RepairedPartStatus::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'sq_no' => 'required',
            'desc' => 'required',
            'date_created' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        RepairedPartStatus::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => "Update Repaired Part Status Success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RepairedPartStatus::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Repaired Part Status Success'
        ]);
    }
}

