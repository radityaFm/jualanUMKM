<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/login');
    }
   
    public function showUmkm()
{
    return view('umkm');
}
public function login(Request $request)
{
    // Validate the request input
    $credentials = $request->only('email', 'password');

    // Attempt to log in
    if (Auth::attempt($credentials)) {
        // Check user role and redirect accordingly
        $user = Auth::user();
        if ($user->role == 'super-admin') {
            return redirect()->route('dashboard');
        } elseif ($user->role == 'admin') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('umkm');
        }
    } else {
        // Authentication failed, redirect back with input and error message
        return redirect()->back()->withInput()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
public function registrasi(){
    return view('registrasi');
}

public function proses(Request $request)
{
    // Validate the request input
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'role' => ['required', 'string'],
    ]);

    // Handle validation failure
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Create the user with role-specific password rules
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $this->generatePassword($request->role, $request->password),
        'role' => $request->role,
    ]);

    // Redirect to login page with success message
    return redirect()->route('login')->with('success', 'Registration successful.');
}

private function generatePassword($role, $password)
{
    switch ($role) {
        case 'super-admin':
            return Hash::make($password . '@SA');
        case 'admin':
            return Hash::make($password . '@ADM');
        case 'user':
            return Hash::make($password . '@USR');
        default:
            return Hash::make($password);
    }
}

public function logout(Request $request)
{
    $request->session()->flush();
    return redirect('/login');
}
}