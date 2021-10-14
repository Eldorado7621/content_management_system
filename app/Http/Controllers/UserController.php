<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index()
    {
       
        $user= User::all();
        return view('users.index');
        //return UserResource::collection(User::with('role')->paginate());
    }

    public function store(UserCreateRequest $request)
    {
       if ($user = User::create(
            $request->only('first_name', 'last_name', 'email', 'role_id')
            + ['password' => Hash::make("password")]
        ))
        {
            return back()->with('success','User created successfully.');
        }
        else{
            return back()->with('error','Could not create User. User might already exist');
        }

        

        //return response(new UserResource($user), Response::HTTP_CREATED);
    }

    public function show($id)
    {
        return new UserResource(User::with('role')->find($id));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);

        $user->update($request->only('first_name', 'last_name', 'email', 'role_id'));

        return \response(new UserResource($user), Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        User::destroy($id);

        return \response(null, Response::HTTP_NO_CONTENT);
    }

    public function updateInfo(UpdateInfoRequest $request)
    {
        $user = $request->user();

        $user->update($request->only('first_name', 'last_name', 'email'));

        return \response(new UserResource($user), Response::HTTP_ACCEPTED);
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = $request->user();

        $user->update([
            'password' => Hash::make($request->input('password'))
        ]);

        return \response(new UserResource($user), Response::HTTP_ACCEPTED);
    }
}