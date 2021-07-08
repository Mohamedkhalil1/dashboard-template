<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Validation\Rule;
use Livewire\Component;

class Show extends Component
{
    public $saved = false;
    public $name = 'he';
    public $email;
    public $password;
    public $passwordConfirmation;
    public $user;


    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function render()
    {
        return view('livewire.profile.show');
    }

    public function updated()
    {
        $this->validate([
            'email' => [Rule::unique('users')->ignore($this->user->id)]
        ]);
        $this->closeNotification();
    }

    public function save()
    {
        $this->validation();
        $this->user->update([
            'email'    => $this->email,
            'name'     => $this->name,
            'password' => bcrypt($this->password),
        ]);
        $this->saved = true;
    }

    public function closeNotification()
    {
        $this->saved = false;
    }


    private function validation()
    {
        $this->validate([
            'email'    => ['required', 'email', Rule::unique('users')->ignore($this->user->id)],
            'name'     => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'min:6', 'same:passwordConfirmation'],
        ]);
    }
}

