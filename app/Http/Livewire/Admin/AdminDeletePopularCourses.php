<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\PopularCourses;
use Livewire\WithPagination;
class AdminDeletePopularCourses extends Component
{
    use WithPagination;

    public function deleteCourse($id){
        $p_course = PopularCourses::find($id);
        $p_course->delete();
        session()->flush('message','One Course has been deleted successfully');
    }
    public function render()
    {
        $p_courses = PopularCourses::paginate(10);
        return view('livewire.admin.admin-delete-popular-courses',['p_courses'=>$p_courses])->layout('layouts.admin');
    }
}
