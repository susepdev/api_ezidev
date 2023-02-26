<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Resources\MachineModelResource;
use App\Models\MachineModel;

class MachineModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MachineModelResource::collection(MachineModel::all());
        
        return response()->json([
            'success' => true,
            'message' => 'Data Machine Model',
            'data' => $data
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

        $input = MachineModel::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Machine Model Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new MachineModelResource(MachineModel::findOrFail($id));
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

        $input = MachineModel::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Updated Machine Model Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MachineModel::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Machine Model Deleted'
        ]);
    }
}
