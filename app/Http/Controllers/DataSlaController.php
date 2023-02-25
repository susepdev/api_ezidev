<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataSlaResource;
use App\Models\DataSla;
use Illuminate\Http\Request;

class DataSlaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Data Data SLA',
            'date' => DataSlaResource::collection(DataSla::all())
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

        $input = DataSla::create($data);

        return response()->json([
            'message' => 'Create Data SLA Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new DataSlaResource(DataSla::FindOrFail($id));
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

        $input = DataSla::where('id', $id)->update($data);

        return response()->json([
            'message' => 'Update Data SLA Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DataSla::where('id', $id)->delete();

        return response()->json([
            'message' => 'Delete Data SLA Success'
        ]);
    }
}
