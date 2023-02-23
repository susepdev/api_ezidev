<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\EntityResource;
use App\Models\Entity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Data Entity',
            'data' => EntityResource::collection(Entity::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'alias' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'is_active' => 'required',
            'adr' => 'required',
            'prov' => 'required',
            'owner' => 'required',
            'hp' => 'required',
            'updated_by' => 'required',
        ]);

        $input = Entity::create($data);

        return response()->json([
            'message' => 'Created Entity Success',
            'data' => $input
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new EntityResource(Entity::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'alias' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'is_active' => 'required',
            'adr' => 'required',
            'prov' => 'required',
            'owner' => 'required',
            'hp' => 'required',
            'updated_by' => 'required',
        ]);

        $input = Entity::where('id', $id)->update($data);

        return response()->json([
            'message' => 'Updated Entity Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Entity::where('id', $id)->delete();

        return response("Entity Deleted");
    }
}
