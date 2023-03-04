<?php

namespace App\Http\Controllers;

use App\Http\Resources\SeverityResource;
use App\Models\Severity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class SeverityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SeverityResource::collection(Severity::all());
        
        return response()->json([
            'success' => true,
            'message' => 'Data Severity',
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
            'is_active' => 'required',
            'updated_by' => 'required',
        ]);

        $input = Severity::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Severity Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SeverityResource(Severity::findOrFail($id));
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

        $input = Severity::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Severity Success',
            'data' => new SeverityResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Severity::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Severity Deleted'
        ]);
    }
}
