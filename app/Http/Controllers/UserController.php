<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function authanticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('dashboard');
        }

        // Jika autentikasi gagal
        return back()->with(['error' => 'Email atau password salah']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function utama()
    {
        return view('admin.utama');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function mailContact(Request $request)
    {
        $data = $request->all();

        Mail::to('pajarcoding@gmail.com')->send(new ContactMail($data));
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
