<div class="col-lg-6">
    <style>
        .content{
            margin-left: 270px !important;
        }
        @media (max-width: 450px) {
            .content{
                margin-left: 0 !important;
            }
        }
        @media (max-width: 768px) {
            .content{
                margin-left: 0 !important;
            }
        }
    </style>
    
<div class="content mt-3">
  <div class="animated fadeIn">

    @if (Session::has('message'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> {{Session::get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
     @endif 
            <div class="card">
                <div class="card-header bg-primary text-light"><strong>Add</strong><small> Popular Course To Home Page</small></div>
                <div class="card-body card-block">
                    <form wire:submit.prevent="addPopularCourse">
                        <div class="form-group">
                            <label for="course_name" class=" form-control-label">Course Name</label>
                            <input type="text" id="course_name" class="form-control" wire:model="course_name" placeholder="Course Name">
                            @error('course_name')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="n_modules" class=" form-control-label">No. of Course Modules</label>
                            <input type="text" id="n_modules" class="form-control" wire:model="n_modules" placeholder="No of Course Modules">
                            @error('n_modules')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="hours" class=" form-control-label">Total hours</label>
                            <input id="hours" rows="10" cols="10" class="form-control" wire:model="hours" placeholder="Total Hours of the course">
                            @error('hours')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="t_n_students" class=" form-control-label">No. of students</label>
                            <input id="t_n_students" rows="10" cols="10" class="form-control" wire:model="t_n_students" placeholder="Total number of students">
                            @error('t_n_students')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="t_n_reviews" class=" form-control-label">Total No. of reviews</label>
                            <input id="t_n_reviews" rows="10" cols="10" class="form-control" wire:model="t_n_reviews" placeholder="Total number of reviews">
                            @error('t_n_reviews')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="price" class=" form-control-label">Course Price</label>
                            <input id="price" rows="10" cols="10" class="form-control" wire:model="price" placeholder="Course Price">
                            @error('price')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="course_category" class=" form-control-label">Course Category</label>
                            <select class="form-control" wire:model="course_category">
                                  <option value="designmultimedia">Design & multimedia</option>
                                  <option value="websoftware">web & software</option>
                                  <option value="degitalmarketing">Degital marketing</option>
                                  <option value="Networking">Networking</option>
                            </select>
                            @error('course_category')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" class=" form-control-label">Course Image</label>
                            <input type="file" id="image" class="form-control" wire:model="image">
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" width="120">
                            @endif
                            @error('image')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
        
                        <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                            <i class="fa fa-plus fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">ADD</span>
                        </button>
                    </form>    
                </div>
            </div>
        </div>
    </div>

</div>



