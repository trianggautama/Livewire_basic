<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.guest')]

class Login extends Component
{
    #[Rule(['required'])]
    public $email       = '';

    #[Rule(['required'])]
    public $password    = '';

    public function login()
    {
        if(Auth::attempt($this->validate()))
        {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credrntials do not match our record',
        ]);
    }

    public function render()
    {
        return view('livewire.login');
    }
}
