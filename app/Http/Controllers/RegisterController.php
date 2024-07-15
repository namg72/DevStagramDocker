<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {

        // dd($request)
        //dd($request->get('userName'));
        //dd($request->all());

        // VALIDACION DEL FORMULARIO
        $request->validate([
            'name' => 'required|min:3|max:20',
            'userName' => 'required|min:3|max:20|unique:users',
            'email' => 'required|unique:users|max:50',
            'password' => 'required|confirmed|min:6',

        ]);

        User::create([
            'name' => $request->name,
            'userName' => $request->userName,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encripta la contraseña
        ]);

        return redirect()->route('home');
    }
}
    







    /* dd('') envia por parntalla pero detiene el programa, es muy util para debugear */
    /* dd($request) => nos envia toda la request */
    /* dd($request->get('userName')) => nos envia un variable en concreo */