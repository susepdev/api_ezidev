<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Resources\PriorityResource;
use App\Models\Priority;

class PriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PriorityResource::collection(Priority::all());
        
        return response()->json([
            'success' => true,
            'message' => 'Data Priority',
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

        $input = Priority::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Created Priority Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PriorityResource(Priority::findOrFail($id));
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

        $input = Priority::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Priority Success',
            'data' => new PriorityResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Priority::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Priority Deleted'
        ]);
    }
}
