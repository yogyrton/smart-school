<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($user)) {
            return redirect()->route('main')->with('success', 'Вы успешно вошли');
        }

        return redirect()->route('login')->with('error', 'Вы ввели неверные данные');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
