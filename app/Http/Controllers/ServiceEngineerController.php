<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceEngineerResource;
use App\Models\ServiceEngineer;
use Illuminate\Http\Request;

class ServiceEngineerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Service Engineer',
            'date' => ServiceEngineerResource::collection(ServiceEngineer::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'se_id' => 'required',
            'hp_no' => 'required',
            'team_leader_id' => 'required',
            'is_active' => 'required',
            'service_base_id' => 'required',
            'region_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = ServiceEngineer::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Service Engineer Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ServiceEngineerResource(ServiceEngineer::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'se_id' => 'required',
            'hp_no' => 'required',
            'team_leader_id' => 'required',
            'is_active' => 'required',
            'service_base_id' => 'required',
            'region_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = ServiceEngineer::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Service Engineer Success',
            'data' => new ServiceEngineerResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ServiceEngineer::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Service Engineer Success'
        ]);
    }
}
