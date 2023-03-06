<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\SotFileUploadResource;
use App\Models\SotFileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SotFileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SotFileUploadResource::collection(SotFileUpload::all());
        return response()->json([
            'success' => true,
            'message' => 'Data SOT File Upload',
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
            'uploaded_file' => 'required|mimes:jpeg,bmp,png,jpg',
            'status_work' => 'required',
            'updated_by' => 'required'
        ]);

        if ($file = $request->file('uploaded_file')) {
            $destinationPath = 'images/sot_uploaded_file/';
            $sotFile = time()."_".$file->getClientOriginalName();
            $file->move($destinationPath, $sotFile);
            $data['uploaded_file'] = "$sotFile";
        }

        $input = SotFileUpload::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create SOT File Upload Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SotFileUploadResource(SotFileUpload::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'so_ticket_no' => 'required',
            'uploaded_file' => 'required|mimes:jpeg,bmp,png,jpg',
            'status_work' => 'required',
            'updated_by' => 'required'
        ]);

        if ($file = $request->file('uploaded_file')) {
            $destinationPath = 'images/sot_uploaded_file/';
            $sotFile = time()."_".$file->getClientOriginalName();
            $file->move($destinationPath, $sotFile);
            $data['uploaded_file'] = "$sotFile";
            
            // delete old image
            $image = SotFileUpload::where('id', $id)->first();
            if (File::exists("images/sot_uploaded_file/" . $image->uploaded_file)) {
                File::delete("images/sot_uploaded_file/" . $image->uploaded_file);
            }
        }else{
            unset($data['uploaded_file']);
        }

        $input = SotFileUpload::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update SOT File Upload Success',
            'data' => new SotFileUploadResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SotFileUpload::FindOrFail($id);
        if (File::exists("images/sot_uploaded_file/" . $data->uploaded_file)) {
            File::delete("images/sot_uploaded_file/" . $data->uploaded_file);
        }
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'SOT File Upload Deleted'
        ]);
    }
}
