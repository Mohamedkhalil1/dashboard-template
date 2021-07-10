<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Show extends Component
{
    use WithFileUploads;

    public $pageTitle = 'Profile';
    public $saved = false;
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $user;
    public $genderTypes;
    public $gender;
    public $socialStatus;
    public $hasJob;
    public $aboutYou;
    public $count = 0;
    public $birthday;
    public $richEditor;
    public $avatar;
    public $newAvatar;

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->richEditor="asdhsadsad";
        $this->genderTypes = [
            [
                'id'    => 1,
                'value' => 'Male',
            ],
            [
                'id'    => 2,
                'value' => 'Female',
            ],
        ];

    }

    public function render()
    {
        return view('livewire.profile.show')
            ->extends('layouts.app')
            ->section('content');
    }

    public function updated()
    {
        $this->validate([
            'email' => [Rule::unique('users')->ignore($this->user->id)],
        ]);
    }

//    public function updatedAvatar()
//    {
//    }

    public function save()
    {

        $this->validation();
        $this->newAvatar = $this->avatar->store('/', 'files');
        $this->updateUser();
//        $this->emitSelf();
        $this->dispatchBrowserEvent('notify', ['message' => 'Profile has been saved successfully!', 'color' => '#4fbe87']);
        $this->password = $this->passwordConfirmation = '';

    }

    public function setGender($value)
    {
//        $this->gender = $value['value'];
    }

    public function setBirthday()
    {
        $this->dispatchBrowserEvent('datepicker', 'birthday');
    }

    private function validation()
    {
        $this->validate([
            'email'    => ['required', 'email', Rule::unique('users')->ignore($this->user->id)],
            'name'     => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'min:6', 'same:passwordConfirmation'],
            'avatar'   => ['nullable', 'image', 'max:20'],
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

