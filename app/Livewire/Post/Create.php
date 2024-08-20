<?php

namespace App\Livewire\Post;

use App\Livewire\Forms\PostForm;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public PostForm $form;

    public function save(): void
    {
       $this->form->store();
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
