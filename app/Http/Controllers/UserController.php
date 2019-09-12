<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        return new UserResource($request->user());        
    }

    public function getToken(Request $request, User $user)
    {
        $credentials = $request->only('email', 'password');
        if(!Auth::attempt($credentials)){
            return response(['message'=> 'Invalid Credentials'], 401);
        }

        Auth::user()->api_token = Str::random(60);
        Auth::user()->save();

        return response([
            'api_token' => Auth::user()->api_token,
            'token_type'=> 'Bearer'
        
        ]);
    }

    public function getById(Request $request, $id)
    {
        $user = User::find($id);
        if(empty($user)){
            return response(['message'=>'User doesn\'t exist'], 404);
        }

        return new UserResource($user);
    }
}
