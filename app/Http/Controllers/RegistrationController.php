<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {

       $user = User::create([
           'name' => request('name'),
           'email' => request('email'),
           'password' => bcrypt(request('password'))
        ]);

       \Auth::login($user);

       \Mail::to($user)->send(new Welcome($user));

       session()->flash('message', 'Thanks for signing up!');

       return redirect()->home();
    }

}
