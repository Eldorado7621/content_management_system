<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id'=>3
        ]);

        return response($user, Response::HTTP_CREATED);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return \response([
                'error' => 'Invalid credentials!'
            ], Response::HTTP_UNAUTHORIZED);
        }

        /** @var User $user */
        $user = Auth::user();

        $jwt = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $jwt, 60 * 24);

        /*return \response([
            'jwt' => $jwt
        ])->withCookie($cookie);*/

        return redirect()->route('dashboard')->withCookie($cookie);
        }

    public function user(Request $request)
    {
        $user = $request->user();
       // return $user;

        return new UserResource($user->load('role'));
    }
    public function logout()
    {
        Auth::logout();
       
    }
    public function logt(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
