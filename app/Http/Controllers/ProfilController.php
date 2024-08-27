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
    ], [
    ]);

    $user->update([
        'name' => $request->username,
        'email' => $request->email,
    ]);

    return redirect()->route('profil-show')->with('success', 'Profile updated successfully.');
}
}
