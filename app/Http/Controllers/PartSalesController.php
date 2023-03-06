<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartSalesResource;
use App\Models\PartSales;
use Illuminate\Http\Request;

class PartSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PartSalesResource::collection(PartSales::all());
        return response()->json([
            'success' => true,
            'message' => 'Data Part Sales',
            'date' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'part_sales_no' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'last_part_status_id' => 'required',
            'quantity' => 'required',
            'customer_id' => 'required',
            'customer_name' => 'required',
            'notes' => 'string',
            'pic_name' => 'required',
            'pic_hp' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartSales::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Sales Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartSalesResource(PartSales::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'part_sales_no' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'last_part_status_id' => 'required',
            'quantity' => 'required',
            'customer_id' => 'required',
            'customer_name' => 'required',
            'notes' => 'string',
            'pic_name' => 'required',
            'pic_hp' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartSales::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Sales Success',
            'data' => new PartSalesResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartSales::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Part Sales Deleted'
        ]);
    }
}

