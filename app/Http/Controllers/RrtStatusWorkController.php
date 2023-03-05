<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RrtStatusWorkResource;
use App\Models\RrtStatusWork;
use Illuminate\Http\Request;

class RrtStatusWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data RRT Status Work',
            'date' => RrtStatusWorkResource::collection(RrtStatusWork::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'rr_ticket_no' => 'required',
            'status_work_id' => 'required',
            'notes' => 'required',
            'updated_by' => 'required',
        ]);

        $input = RrtStatusWork::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create RRT Status Work Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new RrtStatusWorkResource(RrtStatusWork::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'rr_ticket_no' => 'required',
            'status_work_id' => 'required',
            'notes' => 'required',
            'updated_by' => 'required',
        ]);

        $input = RrtStatusWork::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update RRT Status Work Success',
            'data' => new RrtStatusWorkResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RrtStatusWork::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete RRT Status Work Success'
        ]);
    }
}
