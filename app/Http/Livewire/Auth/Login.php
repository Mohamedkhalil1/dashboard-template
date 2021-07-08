<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Livewire\Component;

class Login extends Component
{
    use AuthenticatesUsers;

    public $email;
    public $password;
    public $rememberMe;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {

        if ($this->attemptLogin($this)) {
            return $this->sendLoginResponse($this);
        }
    }

}
