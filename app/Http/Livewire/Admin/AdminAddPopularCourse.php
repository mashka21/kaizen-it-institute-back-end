<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\PopularCourses;
use Illuminate\Support\Carbon;

class AdminAddPopularCourse extends Component
{
    use WithFileUploads;
    public $course_category;
    public $course_name;
    public $slug;
    public $t_n_reviews;
    public $t_n_students;
    public $n_modules;
    public $price;
    public $hours;
    public $duration;
    public $description;
    public $module;
    public $image;

    public function generateSlug(){
        $this->slug = Str::slug($this->course_name,'-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'course_category' => 'required',
            'course_name' => 'required',
            't_n_reviews' => 'required',
            't_n_students' => 'required',
            'n_modules' => 'required',
            'price' => 'required',
            'hours' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'slug'=>'required|unique:popular_courses',
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
            'duration' => 'required',
            'description' => 'required',
            'slug'=>'required|unique:popular_courses',
            'image' => 'required'
        ]);

        $p_course = new PopularCourses();
        $p_course->course_category = $this->course_category;
        $p_course->course_name =$this->course_name;
        $p_course->slug = $this->slug;
        $p_course->t_n_reviews = $this->t_n_reviews;
        $p_course->t_n_students = $this->t_n_students;
        $p_course->n_modules = $this->n_modules;
        $p_course->price = $this->price;
        $p_course->hours = $this->hours;
        $p_course->duration = $this->duration;
        $p_course->description = $this->description;
        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('popular_courses',$imagename);
        $p_course->image = $imagename;
        $p_course->save();
        session()->flash('message','Popular course have been added to Home page successfully');
    }
    public function render()
    {
        $courses = PopularCourses::all();
        return view('livewire.admin.admin-add-popular-course',['courses'=>$courses])->layout('layouts.admin');
    }
}
