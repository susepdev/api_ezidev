<?php

namespace App\Http\Controllers;

use App\Models\PartType;
use App\Http\Controllers\Controller;
use App\Http\Resources\PartTypeResource;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PartTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => "Data Part Type",
            'data' => PartTypeResource::collection(PartType::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'desc'=> 'required',
            'name'=> 'required',
            'is_active'=> 'required',
            'updated_by'=> 'required',
        ]);

        $input = PartType::create($data);

        return response()->json([
            'success' => true,
            'message' => "Create Part Type Success",
            'date' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartTypeResource(PartType::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'desc'=> 'required',
            'name'=> 'required',
            'is_active'=> 'required',
            'updated_by'=> 'required',
        ]);

        PartType::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => "Update Part Type Success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartType::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Type Success'
        ]);
    }
}
