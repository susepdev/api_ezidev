<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Resources\SaverityResource;
use App\Models\Saverity;

class SaverityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SaverityResource::collection(Saverity::all());
        
        return response()->json([
            'success' => true,
            'message' => 'Data Saverity',
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

        $input = Saverity::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Saverity Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SaverityResource(Saverity::findOrFail($id));
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

        $input = Saverity::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Saverity Success',
            'data' => new SaverityResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Saverity::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Saverity Deleted'
        ]);
    }
}
