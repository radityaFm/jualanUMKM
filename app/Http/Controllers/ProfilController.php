<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\firstorfail;

class ProfilController extends Controller
{
public function show() {
  $user = Auth::user();
  return view('profil', compact('user'));
}

public function edit() {
  $user = Auth::user();
  return view('editprofil', compact('user'));
}

public function update(Request $request) {
  $user = Auth::user();

  $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
  ]);

  $user->update([
      'name' => $request->name,
      'email' => $request->email,
  ]);

  return redirect()->route('profil')->with('success', 'Profile updated successfully.');
}
public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
    ]);

    // Handle the data processing (e.g., saving to the database)
    // For example:
    // $profile = new Profile();
    // $profile->name = $request->input('name');
    // $profile->email = $request->input('email');
    // $profile->save();
    return redirect()->route('umkm')->with('success', 'Profile updated successfully.');
}
}
