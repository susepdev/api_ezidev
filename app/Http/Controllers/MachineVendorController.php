<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\MachineVendorResource;
use App\Models\MachineVendor;
use Illuminate\Http\Request;

class MachineVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Data Machine Vendor',
            'date' => MachineVendorResource::collection(MachineVendor::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = MachineVendor::create($data);

        return response()->json([
            'message' => 'Create Machine Vendor Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new MachineVendorResource(MachineVendor::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = MachineVendor::where('id', $id)->update($data);

        return response()->json([
            'message' => 'Update Machine Vendor Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MachineVendor::where('id', $id)->delete();

        return response()->json([
            'message' => 'Delete Machine Vendor Success'
        ]);
    }
}
