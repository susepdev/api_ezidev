<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Resources\OperationHourResource;
use App\Models\OperationHour;

class OperationHourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = OperationHourResource::collection(OperationHour::all());
        
        return response()->json([
            'success' => true,
            'message' => 'Data Operation Hour',
            'data' => $data
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
            'open_hour' => 'required',
            'close_hour' => 'required',
            'days' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = OperationHour::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Operation Hour Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new OperationHourResource(OperationHour::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'days' => 'required',
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = OperationHour::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Updated Operation Hour Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        OperationHour::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Operation Hour Deleted'
        ]);
    }
}
