<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\MachineResource;
use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Machine',
            'data' => MachineResource::collection(Machine::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'ws_id' => 'required',
            'location_name' => 'required',
            'location_adr' => 'required',
            'customer_id' => 'required',
            'contract_id' => 'required',
            'pm_period_id' => 'required',
            'operation_hour_id' => 'required',
            'service_base_id' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Machine::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Machine Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new MachineResource(Machine::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'ws_id' => 'required',
            'location_name' => 'required',
            'location_adr' => 'required',
            'customer_id' => 'required',
            'contract_id' => 'required',
            'pm_period_id' => 'required',
            'operation_hour_id' => 'required',
            'service_base_id' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Machine::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Machine Success',
            'data' => new MachineResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Machine::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Type Success'
        ]);
    }
}
