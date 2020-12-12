<?php

namespace App\Traits;

trait UserRegistry 
{
    public function showRegistrationForm()
    {
        return view('auth.register');

    }

    public function register()
    {
        $this->validate($request->all())->validate();
        event(new UserRegistered($user=$this->create($request->all())));

        $this->guard()->login($user);
        return $this->registered($request, $user)
        ?: redirect($this->redirectPath());
    }

    protected function guard()
    {
        return Auth::guard();
    }
}