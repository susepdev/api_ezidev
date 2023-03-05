<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\LastStatusPartResource;
use App\Models\LastStatusPart;
use Illuminate\Http\Request;

class LastStatusPartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Last Status Part',
            'date' => LastStatusPartResource::collection(LastStatusPart::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'so_ticket_no' => 'required',
            'pr_ticket_no' => 'required',
            'rr_ticket_no' => 'required',
            'part_status_id' => 'required',
            'notes' => 'required',
            'updated_by' => 'required',
        ]);

        $input = LastStatusPart::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create Last Status Part Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new LastStatusPartResource(LastStatusPart::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'so_ticket_no' => 'required',
            'pr_ticket_no' => 'required',
            'rr_ticket_no' => 'required',
            'part_status_id' => 'required',
            'notes' => 'required',
            'updated_by' => 'required',
        ]);

        $input = LastStatusPart::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update Last Status Part Success',
            'data' => new LastStatusPartResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = LastStatusPart::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete Last Status Part Success'
        ]);
    }
}
