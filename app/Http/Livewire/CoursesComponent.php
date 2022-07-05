<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CoursesComponent extends Component
{
    public function render()
    {
        return view('livewire.courses-component')->layout('layouts.base');
    }
}
