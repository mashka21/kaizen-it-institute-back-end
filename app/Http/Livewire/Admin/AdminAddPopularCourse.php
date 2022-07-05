<?php

namespace App\Http\Livewire\Admin;

use App\Models\PopularCourses;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddPopularCourse extends Component
{
    use WithFileUploads;
    public $course_category;
    public $course_name;
    public $t_n_reviews;
    public $t_n_students;
    public $n_modules;
    public $price;
    public $hours;
    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'course_category' => 'required',
            'course_name' => 'required',
            't_n_reviews' => 'required',
            't_n_students' => 'required',
            'n_modules' => 'required',
            'price' => 'required',
            'hours' => 'required',
            'image' => 'required'
        ]);
    }

    public function addPopularCourse(){
        $this->validate([
            'course_category' => 'required',
            'course_name' => 'required',
            't_n_reviews' => 'required',
            't_n_students' => 'required',
            'n_modules' => 'required',
            'price' => 'required',
            'hours' => 'required',
            'image' => 'required'
        ]);

        $p_course = new PopularCourses();
        $p_course->course_category = $this->course_category;
        $p_course->course_name =$this->course_name;
        $p_course->t_n_reviews = $this->t_n_reviews;
        $p_course->t_n_students = $this->t_n_students;
        $p_course->n_modules = $this->n_modules;
        $p_course->price = $this->price;
        $p_course->hours = $this->hours;
        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('popular_courses',$imagename);
        $p_course->image = $imagename;
        $p_course->save();
        session()->flash('message','Popular course have been added to Home page successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-popular-course')->layout('layouts.admin');
    }
}
