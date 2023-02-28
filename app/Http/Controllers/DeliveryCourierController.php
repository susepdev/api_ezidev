<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\DeliveryCourierResource;
use App\Models\DeliveryCourier;
use Illuminate\Http\Request;

class DeliveryCourierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DeliveryCourierResource::collection(DeliveryCourier::all());
        return response()->json([
            'success' => true,
            'message' => 'Data Delivery Courier',
            'date' => $data
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

        $input = DeliveryCourier::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Delivery Courier Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new DeliveryCourierResource(DeliveryCourier::FindOrFail($id));
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

        $input = DeliveryCourier::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Delivery Courier Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DeliveryCourier::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delivery Courier Deleted'
        ]);
    }
}