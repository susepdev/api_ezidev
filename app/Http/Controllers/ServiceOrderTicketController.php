<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceOrderTicketResource;
use App\Models\ServiceOrderTicket;
use Illuminate\Http\Request;

class ServiceOrderTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Service Order Ticket',
            'date' => ServiceOrderTicketResource::collection(ServiceOrderTicket::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'contract_id' => 'required',
            'customer_id' => 'required',
            'service_engineer_id' => 'required',
            'on_duty_se_id' => 'required',
            'on_duty_se_hp' => 'required',
            'entity_id' => 'required',
            'machine_vendor_id' => 'required',
            'machine_model_id' => 'required',
            'machine_id' => 'required',
            'machine_location' => 'required',
            'operation_hour_id' => 'required',
            'operation_hour_name' => 'required',
            'priority_id' => 'required',
            'severity_id' => 'required',
            'service_type_id' => 'required',
            'problem_type_id' => 'required',
            'problem_desc' => 'required',
            'pic_name' => 'required',
            'pic_hp' => 'required',
            'pic_vendor' => 'required',
            'service_base_id' => 'required',
            'reported_date' => 'required',
            'created_date' => 'required',
            'closed_date' => 'required',
            'last_status_work_id' => 'required',
            'problem_finding' => 'required',
            'corrective_action' => 'required',
            'ticket_duration' => 'required',
            'sla_response_id' => 'required',
            'sla_resolve_id' => 'required',
            'sla_resolution_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = ServiceOrderTicket::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Service Order Ticket Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ServiceOrderTicketResource(ServiceOrderTicket::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'contract_id' => 'required',
            'customer_id' => 'required',
            'service_engineer_id' => 'required',
            'on_duty_se_id' => 'required',
            'on_duty_se_hp' => 'required',
            'entity_id' => 'required',
            'machine_vendor_id' => 'required',
            'machine_model_id' => 'required',
            'machine_id' => 'required',
            'machine_location' => 'required',
            'operation_hour_id' => 'required',
            'operation_hour_name' => 'required',
            'priority_id' => 'required',
            'severity_id' => 'required',
            'service_type_id' => 'required',
            'problem_type_id' => 'required',
            'problem_desc' => 'required',
            'pic_name' => 'required',
            'pic_hp' => 'required',
            'pic_vendor' => 'required',
            'service_base_id' => 'required',
            'reported_date' => 'required',
            'created_date' => 'required',
            'closed_date' => 'required',
            'last_status_work_id' => 'required',
            'problem_finding' => 'required',
            'corrective_action' => 'required',
            'ticket_duration' => 'required',
            'sla_response_id' => 'required',
            'sla_resolve_id' => 'required',
            'sla_resolution_id' => 'required',
            'updated_by' => 'required'
        ]);

        $input = ServiceOrderTicket::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Service Order Ticket Success',
            'data' => new ServiceOrderTicketResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ServiceOrderTicket::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Service Order Ticket Success'
        ]);
    }
}
