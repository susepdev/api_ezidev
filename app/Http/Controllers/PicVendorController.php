<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PicVendorResource;
use App\Models\PicVendor;
use Illuminate\Http\Request;

class PicVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data PIC Vendor',
            'date' => PicVendorResource::collection(PicVendor::all())
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
            'no_hp' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = PicVendor::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create PIC Vendor Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PicVendorResource(PicVendor::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'alias' => 'required',
            'name' => 'required',
            'no_hp' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = PicVendor::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update PIC Vendor Success',
            'data' => new PicVendorResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PicVendor::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete PIC Vendor Success'
        ]);
    }
}
