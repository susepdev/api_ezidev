<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupplierResource;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => "Data Supplier",
            'data' => SupplierResource::collection(Supplier::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'desc'=> 'required',
            'name'=> 'required',
            'is_active'=> 'required',
            'updated_by'=> 'required',
        ]);

        $input = Supplier::create($data);

        return response()->json([
            'success' => true,
            'message' => "Create Supplier Success",
            'date' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SupplierResource(Supplier::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'desc'=> 'required',
            'name'=> 'required',
            'is_active'=> 'required',
            'updated_by'=> 'required',
        ]);

        Supplier::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => "Update Supplier Success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Supplier::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Supplier Success'
        ]);
    }
}
