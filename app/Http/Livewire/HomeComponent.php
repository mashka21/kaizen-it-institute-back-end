<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use App\Models\PopularCourses;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $p_courses = PopularCourses::all();
        $slider = HomeSlider::where('status',1)->get();
        return view('livewire.home-component',['slider'=>$slider,'p_courses'=>$p_courses])->layout('layouts.base');
    }
}
