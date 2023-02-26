<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\SlaPmResource;
use App\Models\SlaPm;
use Illuminate\Http\Request;

class SlaPmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Data SLA PM',
            'date' => SlaPmResource::collection(SlaPm::all())
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

        $input = SlaPm::create($data);

        return response()->json([
            'message' => 'Create SLA PM Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SlaPmResource(SlaPm::FindOrFail($id));
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

        $input = SlaPm::where('id', $id)->update($data);

        return response()->json([
            'message' => 'Update SLA PM Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SlaPm::FindOrFail($id);
        $data->delete();

        return response()->json([
            'message' => 'Delete SLA PM Success'
        ]);
    }
}