<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Validation\Rule;
use Livewire\Component;

class Show extends Component
{
    public $saved = false;
    public $name;
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
        return view('livewire.profile.show')->extends('layout.generalBlade')->section('content');
    }

    public function updated()
    {
        $this->validate([
            'email' => [Rule::unique('users')->ignore($this->user->id)],
        ]);
    }

    public function save()
    {
        $this->validation();
        $this->updateUser();
        $this->dispatchBrowserEvent('notify', ['message' => 'Profile Saved!', 'color' => '#4fbe87']);
    }

    private function validation()
    {
        $this->validate([
            'email'    => ['required', 'email', Rule::unique('users')->ignore($this->user->id)],
            'name'     => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'min:6', 'same:passwordConfirmation'],
        ]);
    }

    private function updateUser(): void
    {
        $this->user->update([
            'email' => $this->email,
            'name'  => $this->name,
        ]);
        if ($this->password) {
            $this->user->password = bcrypt($this->password);
            $this->user->save();
        }
    }
}

