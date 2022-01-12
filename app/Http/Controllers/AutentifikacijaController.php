<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AutentifikacijaController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('Reg_Tok_')->plainTextToken;

        $response = [
            'User: ' => $user,
            'Token: ' => $token,
        ];

        return response()->json($response);
    }



    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['Message: ' => 'Wrong email or password!']);
        } else {
            $token = $user->createToken('Log_Tok_')->plainTextToken;
            $response = [
                'User: ' => $user,
                'Login token: ' => $token
            ];

            return response()->json($response);
        }
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('User logged out!');
    }
}
