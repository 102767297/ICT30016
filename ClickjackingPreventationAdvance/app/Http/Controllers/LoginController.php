<?php

namespace App\Http\Controllers;

use App\Models\User; // Make sure to import your BiotechUser model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|unique:users,name', // Ensure unique username
            'password' => 'required|string|min:8', // Password validation
        ]);

        // Create a new user and hash the password
        $user = new User();
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password')); // Hash the password
        $user->save();

        return response()->json(['message' => 'User registered successfully'], 201);
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string', // The username field (replace 'name' with your input name)
            'password' => 'required|string', // The password field
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            // On successful login, redirect to the dashboard
            return redirect()->route('dashboard'); // Make sure 'dashboard' is the correct route
        }

        // Failed login attempt
        return redirect()->route('login')->withErrors(['error' => 'Invalid credentials']); // Return error message
    }
}
