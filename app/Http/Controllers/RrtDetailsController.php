<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RrtDetailsResource;
use App\Models\RrtDetails;
use Illuminate\Http\Request;

class RrtDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data RRT Details',
            'date' => RrtDetailsResource::collection(RrtDetails::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'rr_ticket_no' => 'required',
            'so_ticket_no' => 'required',
            'pr_ticket_no' => 'required',
            'part_id' => 'required',
            'part_name' => 'required',
            'part_sn' => 'required',
            'customer_id' => 'required',
            'service_type_id' => 'required',
            'contract_id' => 'required',
            'created_date' => 'required',
            'accepted_date' => 'date',
            'repair_center_engineer_id' => 'required',
            'repair_started_date' => 'required',
            'repair_action' => 'required',
            'part_usage_id' => 'required',
            'part_usage_name' => 'required',
            'part_usage_quantity' => 'required',
            'last_repaired_part_status' => 'max:255',
            'last_repaired_progress_status' => 'max:255',
            'repair_stopped_date' => 'date',
            'part_return_notes' => 'string',
            'part_return_date' => 'date',
            'last_status_work_id' => 'max:255',
            'ticket_duration' => 'required',
            'updated_by' => 'required'
        ]);

        $input = RrtDetails::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create RRT Details Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new RrtDetailsResource(RrtDetails::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'rr_ticket_no' => 'required',
            'so_ticket_no' => 'required',
            'pr_ticket_no' => 'required',
            'part_id' => 'required',
            'part_name' => 'required',
            'part_sn' => 'required',
            'customer_id' => 'required',
            'service_type_id' => 'required',
            'contract_id' => 'required',
            'created_date' => 'required',
            'accepted_date' => 'date',
            'repair_center_engineer_id' => 'required',
            'repair_started_date' => 'required',
            'repair_action' => 'required',
            'part_usage_id' => 'required',
            'part_usage_name' => 'required',
            'part_usage_quantity' => 'required',
            'last_repaired_part_status' => 'max:255',
            'last_repaired_progress_status' => 'max:255',
            'repair_stopped_date' => 'date',
            'part_return_notes' => 'string',
            'part_return_date' => 'date',
            'last_status_work_id' => 'max:255',
            'ticket_duration' => 'required',
            'updated_by' => 'required'
        ]);

        $input = RrtDetails::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update RRT Details Success',
            'data' => new RrtDetailsResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RrtDetails::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete RRT Details Success'
        ]);
    }
}
