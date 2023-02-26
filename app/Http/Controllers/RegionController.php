<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegionResource;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => "Data Region",
            'data' => RegionResource::collection(Region::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'alias'=> 'required',
            'name'=> 'required',
            'is_active'=> 'required',
            'updated_by'=> 'required',
        ]);

        $input = Region::create($data);

        return response()->json([
            'message' => "Create Region Success",
            'date' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new RegionResource(Region::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'alias'=> 'required',
            'name'=> 'required',
            'is_active'=> 'required',
            'updated_by'=> 'required',
        ]);

        Region::where('id', $id)->update($data);

        return response()->json([
            'message' => "Update Region Success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Region::FindOrFail($id);
        $data->delete();

        return response()->json([
            'message' => 'Delete Region Success'
        ]);
    }
}
