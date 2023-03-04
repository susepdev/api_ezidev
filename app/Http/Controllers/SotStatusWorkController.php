<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\SotStatusWorkResource;
use App\Models\SotStatusWork;
use Illuminate\Http\Request;

class SotStatusWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data SOT Status Work',
            'date' => SotStatusWorkResource::collection(SotStatusWork::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'service_order_ticket_no' => 'required',
            'status_work_id' => 'required',
            'date_created' => 'required',
            'notes' => 'required',
            'updated_by' => 'required'
        ]);

        $input = SotStatusWork::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create SOT Status Work Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SotStatusWorkResource(SotStatusWork::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'service_order_ticket_no' => 'required',
            'status_work_id' => 'required',
            'date_created' => 'required',
            'notes' => 'required',
            'updated_by' => 'required'
        ]);

        $input = SotStatusWork::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update SOT Status Work Success',
            'data' => new SotStatusWorkResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SotStatusWork::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete SOT Status Work Success'
        ]);
    }
}
