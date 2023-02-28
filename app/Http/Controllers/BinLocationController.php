<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\BinLocationResource;
use App\Models\BinLocation;
use Illuminate\Http\Request;

class BinLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BinLocationResource::collection(BinLocation::all());
        return response()->json([
            'success' => true,
            'message' => 'Data Bin Location',
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

        $input = BinLocation::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Bin Location Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new BinLocationResource(BinLocation::FindOrFail($id));
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

        $input = BinLocation::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Bin Location Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = BinLocation::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Bin Location Success'
        ]);
    }
}
