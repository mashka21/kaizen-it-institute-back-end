<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SuccessStoryComponent extends Component
{
    public function render()
    {
        return view('livewire.success-story-component')->layout('layouts.base');
    }
}
