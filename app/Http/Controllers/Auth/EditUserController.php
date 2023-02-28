<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function update(Request $request, string $id)
    {
        // $id = auth('sanctum')->user()->id;
        $data = $request->all();

        $input = User::where('id', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'update User Success',
            'data' => $input
        ]);
    }
}
