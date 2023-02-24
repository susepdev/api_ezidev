<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceBaseResource;
use App\Models\ServiceBase;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceBaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Data Service Base',
            'data' => ServiceBaseResource::collection(ServiceBase::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'updated_by' => 'required'
        ]);

        $input = ServiceBase::create($data);

        return response()->json([
            'message' => 'Create Service Base Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ServiceBaseResource(ServiceBase::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'updated_by' => 'required'
        ]);

        $input = ServiceBase::where('id', $id)->update($data);

        return response()->json([
            'message' => 'Update Service Base Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ServiceBase::where('id', $id)->delete();

        return response()->json([
            'message' => 'Delete Service Base Success'
        ]);
    }
}
