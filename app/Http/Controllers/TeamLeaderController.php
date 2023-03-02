<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamLeaderResource;
use App\Models\TeamLeader;
use Illuminate\Http\Request;

class TeamLeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Team Leader',
            'date' => TeamLeaderResource::collection(TeamLeader::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'tl_id' => 'required',
            'manager_id' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = TeamLeader::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Team Leader Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new TeamLeaderResource(TeamLeader::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'tl_id' => 'required',
            'manager_id' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = TeamLeader::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Team Leader Success',
            'data' => new TeamLeaderResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TeamLeader::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Team Leader Success'
        ]);
    }
}
