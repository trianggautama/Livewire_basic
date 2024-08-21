<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Rule;


class PostForm extends Form
{
    #[Rule(['required'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store():void
    {
        $user       = User::find(1);

        $user->posts()->create(
            $this->validate()
        );
        
        session()->flash('warning','data has been saved');

        $this->reset();
    }

}
