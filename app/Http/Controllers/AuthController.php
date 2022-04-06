<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
  public function showLoginForm(){
    return view("auth.login");
  }
  public function showRegisterForm(){
    return view("auth.register");
  }

  public function register(Request $req){
    $valid = $req->validate([
      'name' => 'required|min:5|max:50',
      'email' => 'required|min:5|unique:users',
      'password' => 'required|min:5|confirmed',
    ]);

    $user = User::create([
      'name' => $valid['name'],
      'email' => $valid['email'],
      'password' => bcrypt($valid['password']),
    ]);

    if($user) {
      auth('web')->login($user);
    }
    return redirect(route('user'));
  }

  public function logout(){
    auth('web')->logout();

    return redirect(route('home'));
  }

  public function login(Request $req){
    $valid = $req->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    if(auth('web')->attempt($valid)) {
      return redirect(route('user'));
    }

    return redirect(route('login'))->withErrors(['email' => 'Пользователь не найден либо данные введены неверно']);
  }

}
