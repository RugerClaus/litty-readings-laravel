<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        // Validate request
        $credentials = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        // Attempt to authenticate user
        if(Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            // Return error if authentication fails
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
    }
    public function logout() 
    {
        Auth::logout();

        return redirect(route('admin.login.page'));
    }
    public function register(Request $request)
    {  
        // Validate request
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $success = $this->create($data);
         
        if ($success) {
            return redirect()->route('home');
        } else {
            // Return error if registration fails
            throw ValidationException::withMessages([
                'email' => ['An error occurred while registering the user.'],
            ]);
        }
    }
    public function create(array $data)
    {
        try {
            return User::create([
                'name' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);
        } catch (\Exception $e) {
            // Return false if user could not be created
            return false;
        }
    } 
}
