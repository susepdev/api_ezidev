<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PrtStatusWorkResource;
use App\Models\PrtStatusWork;
use Illuminate\Http\Request;

class PrtStatusWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data PRT Status Work',
            'date' => PrtStatusWorkResource::collection(PrtStatusWork::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'pr_ticket_no' => 'required',
            'status_work_id' => 'required',
            'date_created' => 'required',
            'notes' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PrtStatusWork::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Create PRT Status Work Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PrtStatusWorkResource(PrtStatusWork::FindOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'sq_no' => 'required',
            'pr_ticket_no' => 'required',
            'status_work_id' => 'required',
            'date_created' => 'required',
            'notes' => 'required',
            'updated_by' => 'required'
        ]);

        $input = PrtStatusWork::FindOrFail($id);
        $input->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update PRT Status Work Success',
            'data' => new PrtStatusWorkResource($input)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PrtStatusWork::FindOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete PRT Status Work Success'
        ]);
    }
}
