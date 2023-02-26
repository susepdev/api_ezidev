<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\TimezoneResource;
use App\Models\Timezone;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TimezoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => "Data Timezone",
            'data' => TimezoneResource::collection(Timezone::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required',
            'updated_by'=> 'required',
        ]);

        $input = Timezone::create($data);

        return response()->json([
            'message' => "Create Time Zone Success",
            'date' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new TimezoneResource(Timezone::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'=> 'required',
            'updated_by'=> 'required',
        ]);

        Timezone::where('id', $id)->update($data);

        return response()->json([
            'message' => "Update Time Zone Success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Timezone::FindOrFail($id);
        $data->delete();

        return response()->json([
            'message' => 'Delete Time Zone Success'
        ]);
    }
}
