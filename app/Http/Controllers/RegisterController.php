<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('Dashboard.user.create', [
            "title" => 'Regiter',
        ]);
    }

    public function index()
    {
        return view('Dashboard.user.index', [
            'user' => User::all(),
            "active" => 'register'
        ]);
    }

    public function store(Request $request)
    {
        //validasi data
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255'
        ]);
        //hash pasword
        // $validateData['password'] = bcrypt($validateData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        //kirim flash data buat alert
        // $request->session()->flash('success', ' Registration Successfully! Please Kogin');

        return redirect('/dashboard/user')->with('success', ' Registration Successfully! Please login');
    }

    public function showPasswordForm($id)
    {
        $user = User::findOrFail($id);
        return view(
            'Dashboard.user.password', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        // Validate data
        $request->validate([
            'password' => 'required|min:5|max:255',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Hash and update the password
        $user->update([
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect with success message
        return redirect('/dashboard/user')->with('success', ' Password updated successfully!');
    }

    public function destroy(User $user)
    {
        // Additional checks, if needed (e.g., check user permissions)
    
        User::destroy($user->id);
    
        return redirect('/dashboard/user')->with('success', 'User has been deleted successfully!');
    }

}
