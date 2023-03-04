<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartQtyEditResource;
use App\Models\PartQtyEdit;
use Illuminate\Http\Request;

class PartQtyEditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Part Qty Edit',
            'date' => PartQtyEditResource::collection(PartQtyEdit::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'part_no' => 'required',
            'part_name' => 'required',
            'part_sn' => 'required',
            'notes' => 'required',
            'supporting_doc' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartQtyEdit::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Part Qty Edit Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PartQtyEditResource(PartQtyEdit::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'part_no' => 'required',
            'part_name' => 'required',
            'part_sn' => 'required',
            'notes' => 'required',
            'supporting_doc' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PartQtyEdit::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Part Qty Edit Success',
            'data' => new PartQtyEditResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PartQtyEdit::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Part Qty Edit Success'
        ]);
    }
}
