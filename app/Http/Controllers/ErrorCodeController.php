<?php

namespace App\Http\Controllers;

use App\Models\ErrorCode;
use App\Http\Controllers\Controller;
use App\Http\Resources\ErrorCodeResource;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ErrorCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ErrorCodeResource::collection(ErrorCode::all());
        return response()->json([
            'success' => true,
            'message' => 'Data Error Code',
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

        $input = ErrorCode::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Error Code Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ErrorCodeResource(ErrorCode::FindOrFail($id));
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

        $input = ErrorCode::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Error Code Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ErrorCode::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Error Code Deleted'
        ]);
    }
}
