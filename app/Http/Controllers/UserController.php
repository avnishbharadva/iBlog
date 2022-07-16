<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = new User;
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = $request['password'];
        $users->save();

        return redirect('/');
    }

    public function login(Request $req)
    {
        $email = User::where('email', $req['email'])->value('email');
        $password = User::where('email', $req['email'])->value('password');
        $id = User::where('email', $req['email'])->value('id');
        $name = User::where('email', $req['email'])->value('name');
        
        // echo "<pre>";
        // echo($email);
        // echo($password);
        // echo "</pre>";

        if($req['email']==$email && $req['password']==$password)
        {
            // echo "login successfully",$id;
            session(['userid' => $id]);
            session(['username' => $name]);

            // $data = session()->all();
            // print_r($data);

        return redirect('/');
        }
        else
            echo "login failed";
    }

    public function logout()
    {
        session()->forget(['userid', 'username']);

        // print_r(session()->all());
        return redirect('/');
    }
}
