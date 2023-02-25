<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\SlaResolveResource;
use App\Models\SlaResolve;
use Illuminate\Http\Request;

class SlaResolveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Data SLA Resolve',
            'date' => SlaResolveResource::collection(SlaResolve::all())
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

        $input = SlaResolve::create($data);

        return response()->json([
            'message' => 'Create SLA Resolve Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SlaResolveResource(SlaResolve::FindOrFail($id));
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

        $input = SlaResolve::where('id', $id)->update($data);

        return response()->json([
            'message' => 'Update SLA Resolve Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SlaResolve::where('id', $id)->delete();

        return response()->json([
            'message' => 'Delete SLA Resolve Success'
        ]);
    }
}
