<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginF(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Авторизация успешна
            return redirect()->intended('/admin');
        } else {
            // Авторизация не удалась
            return back()->withErrors(['login' => 'Неверное имя пользователя или пароль']);
        }
    }
  
}