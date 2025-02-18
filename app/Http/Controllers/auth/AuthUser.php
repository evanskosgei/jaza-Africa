<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ]);

            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'name' => $request->firstname . ' ' . $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            Auth::login($user);
            return redirect()->back()->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Registration not successful!');
        }
    }
    public function signin(Request $request)
    {
        try {
            $request->validate([
                'email'    => 'required|email',
                'password' => 'required|min:6',
            ]);
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->with('success', 'Login successful');
            }
            return back()->with(['error' => 'Invalid credentials'])->withInput();
    
        } catch (\Exception $e) {
            return back()->with(['error' => 'Something went wrong. Please try again later.']);
        }
    }
}
