<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\EsignUploadResource;
use App\Models\EsignUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'e_sign_image' => 'required|mimes:jpeg,bmp,png,jpg',
            'updated_by' => 'required'
        ]);

        if ($file = $request->file('e_sign_image')) {
            $destinationPath = 'images/esign_image/';
            $esignImage = time()."_".$file->getClientOriginalName();
            $file->move($destinationPath, $esignImage);
            $data['e_sign_image'] = "$esignImage";
        }

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
            'e_sign_image' => 'required|mimes:jpeg,bmp,png,jpg',
            'updated_by' => 'required'
        ]);

        if ($file = $request->file('e_sign_image')) {
            $destinationPath = 'images/esign_image/';
            $esignImage = time()."_".$file->getClientOriginalName();
            $file->move($destinationPath, $esignImage);
            $data['e_sign_image'] = "$esignImage";
            
            // delete old image
            $image = EsignUpload::where('id', $id)->first();
            if (File::exists("images/esign_image/" . $image->e_sign_image)) {
                File::delete("images/esign_image/" . $image->e_sign_image);
            }
        }else{
            unset($data['e_sign_image']);
        }

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
        if (File::exists("images/esign_image/" . $data->e_sign_image)) {
            File::delete("images/esign_image/" . $data->e_sign_image);
        }
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'E-Sign Upload Deleted'
        ]);
    }
}
