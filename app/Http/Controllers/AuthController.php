<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use Carbon\Carbon; // Import Carbon for timestamps

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:Customer,Employee',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        $currentTimestamp = Carbon::now(); // Get current date and time

        // Create user with timestamps
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp
        ]);

        if ($request->role == 'Customer') {
            Customer::create([
                'user_id' => $user->user_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'province' => $request->province,
                'city' => $request->city,
                'zip_code' => $request->zip_code,
                'phone_number' => $request->phone_number,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ]);
        } else {
            Employee::create([
                'user_id' => $user->user_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ]);
        }

        return response()->json(['message' => 'User registered successfully!']);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Get the authenticated user
    
            // Redirect based on role
            if ($user->role === 'Customer') {
                return redirect()->route('dashboard');
            } elseif ($user->role === 'Employee') {
                return redirect()->route('admin.dashboard');
            }
        }
    
        return back()->withErrors(['email' => 'Invalid credentials']);
    }   

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
