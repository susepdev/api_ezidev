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
            'message' => "Data Timezone",
            'data' => TimezoneResource::collection(Timezone::all())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
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

        Timezone::create($data);

        return response()->json("Created Time Zone succes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new TimezoneResource(Timezone::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
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

        return response()->json("updated succes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Timezone::where('id', $id)->delete();

        return response("Time Zone Deleted");
    }
}
