<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            // 'user_id' => 'required',
            // 'alias' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            // 'role' => 'required',
            // 'is_active' => 'required',
            // 'adr' => 'required',
            // 'city' => 'required',
            // 'prov' => 'required',
            // 'service_base_id' => 'required',
            // 'time_zone_id' => 'required',
            'email' => [ 'required', 'string', 'email', 'max:255', Rule::unique(User::class),],
            'password' => ['required','min:8', 'confirmed'],
        ]);

        $user = User::create([
            'user_id' => Str::random(8),
            'name' => $request->name,
            'email' => $request->email,
            'service_base_id' => $request->service_base_id,
            'time_zone_id' => $request->time_zone_id,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('myAppToken');

        return (new UserResource($user))->additional([
            'token' => $token->plainTextToken,
        ]);
    }
}
