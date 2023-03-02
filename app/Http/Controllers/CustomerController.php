<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Customer',
            'data' => CustomerResource::collection(Customer::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'alias' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'customer_type_id' => 'required',
            'is_active' => 'required',
            'adr' => 'required',
            'prov' => 'required',
            'pic' => 'required',
            'pic_hp' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Customer::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Customer Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new CustomerResource(Customer::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'alias' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'customer_type_id' => 'required',
            'is_active' => 'required',
            'adr' => 'required',
            'prov' => 'required',
            'pic' => 'required',
            'pic_hp' => 'required',
            'updated_by' => 'required'
        ]);

        $input = Customer::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Customer Success',
            'data' => new CustomerResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Customer::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Customer Success'
        ]);
    }
}
