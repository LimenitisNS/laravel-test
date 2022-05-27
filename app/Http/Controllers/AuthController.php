<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController
{
    public function register_page() {
        return view('registration');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            "login" => "required|unique:users,login",
            "password" => "required|confirmed"
        ]);

        if($validator->fails())
            return redirect("/registration")->withErrors("Ошибка", "message");

        DB::table('users')->insert([
            "name" => $request->input("name"),
            "surname" => $request->input("surname"),
            "patronymic" => $request->input("patronymic"),
            "login" => $request->input("login"),
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password")),
            "role" => "user"
        ]);

        return redirect("/")->withErrors("Вы зарегистрировались", "message");
    }

    public function login_page() {
        return view('login');
    }

    public function login(Request $request) {
        $login = $request->input("login");
        $password = $request->input("password");

        if(Auth::attempt(["login" => $login, "password" => $password], true)) {
            return redirect("/");
        } else {
            return redirect("/login")->withErrors("Ошибка логина или пароля", "message");
        }
    }

    public function logout() {
        if(Auth::check()) {
            Auth::logout();
            return redirect("/")->withErrors("Вы вышли", "message");
        } else {
            return redirect("/")->withErrors("Вы не авторизованы", "message");
        }
    }
}
