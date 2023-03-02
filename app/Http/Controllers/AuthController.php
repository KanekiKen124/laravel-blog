<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(SignUpRequest $request)
    {
        $user = User::query()->create([
            'password' => Hash::make($request['password'])
        ] + $request->validated());

        Auth::login($user);

        return redirect()->route('home');
    }
    public function signin(SignInRequest $request)
    {
        if(!Auth::attempt($request->validated())){
            return back()->withErrors(['invalid'=>'Invalid credentials'])->withInput($request->all());
        }

        if(Auth::user()->role === 'banned'){
            Auth::logout();

            return back()->withErrors(['banned'=>'You are has been banned'])->withInput($request->all());
        }

        return redirect()->route('home');

    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
