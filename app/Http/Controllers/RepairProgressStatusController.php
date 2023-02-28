<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RepairProgressStatusResource;
use App\Models\RepairProgressStatus;
use Illuminate\Http\Request;

class RepairProgressStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => "Data Repair Progress Status",
            'data' => RepairProgressStatusResource::collection(RepairProgressStatus::all())
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

        $input = RepairProgressStatus::create($data);

        return response()->json([
            'success' => true,
            'message' => "Create Repair Progress Status Success",
            'date' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new RepairProgressStatusResource(RepairProgressStatus::findOrFail($id));
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

        RepairProgressStatus::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => "Update Repair Progress Status Success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RepairProgressStatus::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Repair Progress Status Success'
        ]);
    }
}
