<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PrtFileUploadResource;
use App\Models\PrtFileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrtFileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PrtFileUploadResource::collection(PrtFileUpload::all());
        return response()->json([
            'success' => true,
            'message' => 'Data PRT File Upload',
            'date' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'pr_ticket_no' => 'required',
            'uploaded_file' => 'required|mimes:jpeg,bmp,png,jpg',
            'status_work' => 'required',
            'updated_by' => 'required'
        ]);

        if ($file = $request->file('uploaded_file')) {
            $destinationPath = 'images/prt_uploaded_file/';
            $prtFile = time()."_".$file->getClientOriginalName();
            $file->move($destinationPath, $prtFile);
            $data['uploaded_file'] = "$prtFile";
        }

        $input = PrtFileUpload::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create PRT File Upload Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PrtFileUploadResource(PrtFileUpload::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'pr_ticket_no' => 'required',
            'uploaded_file' => 'required|mimes:jpeg,bmp,png,jpg',
            'status_work' => 'required',
            'updated_by' => 'required'
        ]);

        if ($file = $request->file('uploaded_file')) {
            $destinationPath = 'images/prt_uploaded_file/';
            $prtFile = time()."_".$file->getClientOriginalName();
            $file->move($destinationPath, $prtFile);
            $data['uploaded_file'] = "$prtFile";
            
            // delete old image
            $image = PrtFileUpload::where('id', $id)->first();
            if (File::exists("images/prt_uploaded_file/" . $image->uploaded_file)) {
                File::delete("images/prt_uploaded_file/" . $image->uploaded_file);
            }
        }else{
            unset($data['uploaded_file']);
        }

        $input = PrtFileUpload::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update PRT File Upload Success',
            'data' => new PrtFileUploadResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PrtFileUpload::FindOrFail($id);
        if (File::exists("images/prt_uploaded_file/" . $data->uploaded_file)) {
            File::delete("images/prt_uploaded_file/" . $data->uploaded_file);
        }
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'PRT File Upload Deleted'
        ]);
    }
}
