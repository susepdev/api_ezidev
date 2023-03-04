<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\LogisticStaffResource;
use App\Models\LogisticStaff;
use Illuminate\Http\Request;

class LogisticStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Logistic Staff',
            'data' => LogisticStaffResource::collection(LogisticStaff::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'staff_id' => 'required',
            'alias' => 'required',
            'name' => 'required',
            'team_leader_id' => 'required',
            'is_active' => 'required',
            'time_zone_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = LogisticStaff::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Logistic Staff Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new LogisticStaffResource(LogisticStaff::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'staff_id' => 'required',
            'alias' => 'required',
            'name' => 'required',
            'team_leader_id' => 'required',
            'is_active' => 'required',
            'time_zone_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = LogisticStaff::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Logistic Staff Success',
            'data' => new LogisticStaffResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = LogisticStaff::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Logistic Staff Success'
        ]);
    }
}
