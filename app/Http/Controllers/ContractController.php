<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContractResource;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Contract',
            'data' => ContractResource::collection(Contract::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'contract_no' => 'required',
            'customer_id' => 'required',
            'sla_response_id' => 'required',
            'sla_resolve_id' => 'required',
            'sla_resolution_id' => 'required',
            'sla_pm_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'renewal_status' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Contract::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Contract Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ContractResource(Contract::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'contract_no' => 'required',
            'customer_id' => 'required',
            'sla_response_id' => 'required',
            'sla_resolve_id' => 'required',
            'sla_resolution_id' => 'required',
            'sla_pm_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'renewal_status' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Contract::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Contract Success',
            'data' => new ContractResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Contract::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Contract Success'
        ]);
    }
}
