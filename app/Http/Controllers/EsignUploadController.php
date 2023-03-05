<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\EsignUploadResource;
use App\Models\EsignUpload;
use Illuminate\Http\Request;

class EsignUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = EsignUploadResource::collection(EsignUpload::all());
        return response()->json([
            'success' => true,
            'message' => 'Data E-Sign Upload',
            'date' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'e_sign_image' => 'required',
            'updated_by' => 'required'
        ]);

        $input = EsignUpload::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create E-Sign Upload Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new EsignUploadResource(EsignUpload::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'e_sign_image' => 'required',
            'updated_by' => 'required'
        ]);

        $input = EsignUpload::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update E-Sign Upload Success',
            'data' => new EsignUploadResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = EsignUpload::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'E-Sign Upload Deleted'
        ]);
    }
}
