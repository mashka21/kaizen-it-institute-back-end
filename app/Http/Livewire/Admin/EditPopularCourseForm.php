<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PopularCourses;
use Illuminate\Support\Carbon;

class EditPopularCourseForm extends Component
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
    public $p_course_id;
    public $newimage;

    public function mount($p_course_id){
        $p_course = PopularCourses::find($p_course_id);
        $this->course_category = $p_course->course_category ;
        $this->course_name = $p_course->course_name;
        $this->t_n_reviews = $p_course->t_n_reviews ;
        $this->t_n_students = $p_course->t_n_students;
        $this->n_modules = $p_course->n_modules;
        $this->price = $p_course->price;
        $this->hours = $p_course->hours;
        $this->image = $p_course->image;
        $this->p_course_id = $p_course->id;
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
        ]);
    }

    public function updatePopularCourse(){
        $this->validate([
            'course_category' => 'required',
            'course_name' => 'required',
            't_n_reviews' => 'required',
            't_n_students' => 'required',
            'n_modules' => 'required',
            'price' => 'required',
            'hours' => 'required',
        ]);

        $p_course = PopularCourses::find($this->p_course_id);
        $p_course->course_category = $this->course_category;
        $p_course->course_name =$this->course_name;
        $p_course->t_n_reviews = $this->t_n_reviews;
        $p_course->t_n_students = $this->t_n_students;
        $p_course->n_modules = $this->n_modules;
        $p_course->price = $this->price;
        $p_course->hours = $this->hours;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('popular_courses',$imagename);
            $p_course->image = $imagename;
        }
        $p_course->save();
        session()->flash('message','Popular course have been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.edit-popular-course-form')->layout('layouts.admin');
    }
}
