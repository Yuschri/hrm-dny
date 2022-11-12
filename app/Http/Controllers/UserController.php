<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required',  'string'],
                'pegawai_id' => ['required', 'string'],
                'role_id' => ['required', 'string'],
            ]);

            // Create user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'pegawai_id' => $request->pegawai_id,
                'role_id' => $request->role_id,
            ]);

            // Generate token
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            // Return response
            return $this->sendSuccessResponse('Berhasil menambah User','');
        } catch (Exception $error) {
            // Return error response
            return $this->sendErrorResponse('Maaf terjadi kesalahan.', $error->getMessage());
        }
    }
}
