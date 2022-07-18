<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminAddCommentsHomePage;
use App\Http\Livewire\Admin\AdminAddFreeSeminar;
use App\Http\Livewire\Admin\AdminAddHomeSlider;
use App\Http\Livewire\Admin\AdminAddPartners;
use App\Http\Livewire\Admin\AdminAddPopularCourse;
use App\Http\Livewire\Admin\AdminAddSoftwareServices;
use App\Http\Livewire\Admin\AdminAddSuccessStory;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminDeleteCommentsHomePage;
use App\Http\Livewire\Admin\AdminDeleteFreeSeminar;
use App\Http\Livewire\Admin\AdminDeleteHomeSlider;
use App\Http\Livewire\Admin\AdminDeletePopularCourses;
use App\Http\Livewire\Admin\AdminDeleteUsers;
use App\Http\Livewire\Admin\AdminEditCommentsHomePage;
use App\Http\Livewire\Admin\AdminEditFreeSeminars;
use App\Http\Livewire\Admin\AdminEditHomeSlider;
use App\Http\Livewire\Admin\AdminEditPartner;
use App\Http\Livewire\Admin\AdminEditPopularCourses;
use App\Http\Livewire\Admin\AdminEditSoftwareServices;
use App\Http\Livewire\Admin\AdminEditSuccessStory;
use App\Http\Livewire\Admin\AdminEditUsers;
use App\Http\Livewire\Admin\AdminManageContacts;
use App\Http\Livewire\Admin\AdminManagePartners;
use App\Http\Livewire\Admin\AdminManageSuccessStories;
use App\Http\Livewire\Admin\AdminMangeFreeSeminars;
use App\Http\Livewire\Admin\AdminMangeSoftwareServices;
use App\Http\Livewire\Admin\AdminSettings;
use App\Http\Livewire\Admin\AdminShowUsers;
use App\Http\Livewire\Admin\EditComment;
use App\Http\Livewire\Admin\EditHomeSliderForm;
use App\Http\Livewire\Admin\EditPopularCourseForm;
use App\Http\Livewire\Admin\EditUser;
use App\Http\Livewire\AdmissionFormComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CourseDetailsComponent;
use App\Http\Livewire\CoursesComponent;
use App\Http\Livewire\FreelancingComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SoftwareServicesComponent;
use App\Http\Livewire\SuccessStoryComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/',HomeComponent::class);
Route::get('/about',AboutComponent::class);
Route::get('/software-services',SoftwareServicesComponent::class);
Route::get('/freelancing',FreelancingComponent::class);
Route::get('/success-story',SuccessStoryComponent::class);
Route::get('/contact',ContactComponent::class);
Route::get('/courses',CoursesComponent::class);
Route::get('/course/{slug}',CourseDetailsComponent::class)->name('course.details');
Route::get('/make-admission-course',AdmissionFormComponent::class);


Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    
    Route::get('/admin/admin-dashboard',AdminDashboard::class)->name('admin.dashboard'); 
    
   //Admin manage users 
    Route::get('/admin/admin-show-all-users',AdminShowUsers::class)->name('admin.showusers');    
    Route::get('/admin/admin-edit-users',AdminEditUsers::class)->name('admin.editusers');    
    Route::get('/admin/admin-delete-users',AdminDeleteUsers::class)->name('admin.deleteusers');    
    Route::get('/admin/admin-edit-user/{user_id}',EditUser::class)->name('admin.edituser');    

    //Admin manage home slider
    Route::get('/admin/admin-add-home-slider',AdminAddHomeSlider::class)->name('admin.addhomeslider');
    Route::get('/admin/admin-edit-home-slider',AdminEditHomeSlider::class)->name('admin.edithomeslider');
    Route::get('/admin/admin-edit-home-slider/{slide_id}',EditHomeSliderForm::class)->name('admin.edithomesliderForm');
    Route::get('/admin/admin-delete-home-slider',AdminDeleteHomeSlider::class)->name('admin.deletehomeslider');

    // Admin manage Home page popular courses
    Route::get('/admin/admin-add-popular-course-to-home-page',AdminAddPopularCourse::class)->name('admin.addPopularCourse'); 
    Route::get('/admin/admin-edit-popular-course-to-home-page',AdminEditPopularCourses::class)->name('admin.editPopularCourses');
    Route::get('/admin/admin-edit-popular-course-to-home-page/{p_course_id}',EditPopularCourseForm::class)->name('admin.editpopularcourse'); 
    Route::get('/admin/admin-delete-popular-course-to-home-page',AdminDeletePopularCourses::class)->name('admin.deletePopularCourse');

    // Admin Manage Comments on Home Page 
    Route::get('/admin/admin-add-comments-to-home-page',AdminAddCommentsHomePage::class)->name('admin.addcomments');
    Route::get('/admin/admin-edit-comment-to-home-page',AdminEditCommentsHomePage::class)->name('admin.editcomments');
    Route::get('/admin/admin-edit-comment-to-home-page/{comment_id}',EditComment::class)->name('admin.editcomment');
    Route::get('/admin/admin-delete-comment-to-home-page',AdminDeleteCommentsHomePage::class)->name('admin.deletecomment');


    //upcoming free-semiar routes
    Route::get('/admin/admin-mange-freeseminars',AdminMangeFreeSeminars::class)->name('admin.managefreeseminars');
    Route::get('/admin/admin-add-free-seminar',AdminAddFreeSeminar::class)->name('admin.addfreeseminar');
    Route::get('/admin/admin-edit-free-seminar/{freeseminar_id}',AdminEditFreeSeminars::class)->name('admin.editfreeseminar');

    //Success Stories 
    Route::get('/admin/admin-manage-success-stories',AdminManageSuccessStories::class)->name('admin.managesuccessstory');
    Route::get('/admin/admin-add-success-story',AdminAddSuccessStory::class)->name('admin.addsuccessstory');
    Route::get('/admin/admin-edit-success-story/{story_id}',AdminEditSuccessStory::class)->name('admin.editsuccessstory');

    // Admin manage software services 
    Route::get('/admin/admin-manage-software-services',AdminMangeSoftwareServices::class)->name('admin.manageSoftwareServices');
    Route::get('/admin/admin-add-software-service',AdminAddSoftwareServices::class)->name('admin.addSoftware');
    Route::get('/admin/admin-edit-software-service/{service_id}',AdminEditSoftwareServices::class)->name('admin.editSoftwareService');

    // admin web settings 
    
    Route::get('/admin/admin-web-settings',AdminSettings::class)->name('admin.settings');

    //contacts
    Route::get('/admin/admin-manage-contacts',AdminManageContacts::class)->name('admin.managecontacts');

    // our partners 
    Route::get('/admin/admin-manage-partners',AdminManagePartners::class)->name('admin.managepartners');
    Route::get('/admin/admin-add-partner',AdminAddPartners::class)->name('admin.addPartners');
    Route::get('/admin/admin-edit-partner/{partner_id}',AdminEditPartner::class)->name('admin.editPartner');
});


Route::middleware(['auth:sanctum','verified'])->group(function(){

});
