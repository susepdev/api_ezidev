<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PrtDetailsResource;
use App\Models\PrtDetails;
use Illuminate\Http\Request;

class PrtDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part Request Ticket Details',
            'date' => PrtDetailsResource::collection(PrtDetails::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'part_request_ticket_no' => 'required',
            'service_order_ticket_no' => 'required',
            'customer_name' => 'required',
            'machine_id' => 'required',
            'service_engineer_id' => 'required',
            'problem_finding' => 'required',
            'error_code' => 'max:255',
            'last_requested_part_id' => 'max:255',
            'quantity' => 'required',
            'logistic_staff_id' => 'required',
            'last_status_work_id' => 'required',
            'ticket_duration' => 'required',
            'approval_by' => 'max:255',
            'approval_date' => 'date',
            'created_date' => 'required',
            'part_waiting_preparation_notes' => 'string',
            'accepted_date' => 'date',
            'prepared_part_no' => 'required',
            'prepared_part_quantity' => 'required',
            'prepared_by' => 'max:255',
            'part_on_preparation_notes' => 'string',
            'part_preparation_date' => 'required',
            'delivery_courier_id' => 'required',
            'tracking_no' => 'required',
            'part_delivery_date' => 'date',
            'part_eta' => 'date',
            'delivery_by' => 'required',
            'received_part_date' => 'date',
            'part_received_status' => 'string',
            'updated_by' => 'required'
        ]);

        $input = PrtDetails::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Request Ticket Details Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PrtDetailsResource(PrtDetails::FindOrFail($id));
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

        $input = PrtDetails::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Request Ticket Details Success',
            'data' => new PrtDetailsResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PrtDetails::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Request Ticket Details Success'
        ]);
    }
}
