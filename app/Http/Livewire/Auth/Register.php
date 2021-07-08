<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function validation()
    {
        $this->validate([
            'email'    => ['required', 'email', Rule::unique('users')],
            'name'     => ['required'],
            'password' => ['required', 'min:6', 'same:passwordConfirmation'],
        ]);
    }

    public function updated()
    {
        $this->validate([
            'email' => [Rule::unique('users')],
            //            'passwordConfirmation' => ['same:password'],
        ]);
    }

    public function register()
    {
        $this->validation();
        User::create([
            'email'    => $this->email,
            'name'     => $this->name,
            'password' => Hash::make($this->password),
        ]);
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
