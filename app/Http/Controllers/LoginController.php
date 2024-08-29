<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6', 'max:21'],
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Check if user exists
        $user = User::where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            // Login user
            Auth::login($user);
            return redirect()->route('umkm'); // Redirect ke route 'umkm' yang baru
        } else {
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }
    }
public function registrasi(){
    return view('registrasi');
}
public function proses(Request $request){
       // dd($request->all());
       $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
    ]);

    // Create a new user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), // Hash the password
    ]);
        return redirect('login')->with('success', 'Registration successful, please check your phone for verification.');
}
public function logout(Request $request) 
    {
        $request->session()->flush();
        return redirect('/login');
    }
}