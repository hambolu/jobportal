@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <p class="text-white mt-5 mb-5">Welcome back, <b>{{Auth::user()->name }}</b></p>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block">
                <div class="row">
                    <div class="col-sm-3">
                        @if(Auth::user()->profile_photo_path == null)
                        <img src="https://www.pngitem.com/pimgs/m/150-1503945_transparent-user-png-default-user-image-png-png.png" alt="" width="100px">
                        @else

                        <img src="/uploads/profile/{{Auth::user()->profile_photo_path }}" width="100px" alt="" srcset="">
                        @endif
                    </div>
                    <div class="col">
                        <p class="text-white">
                            {{Auth::user()->name }}
                        </p>
                        <p class="text-white">
                            {{Auth::user()->email }}
                        </p>
                    </div>
                </div>
                <p class="text-white">
                    {{Auth::user()->phone }}
                </p>
                <p class="text-white">
                    {{Auth::user()->skills }}
                </p>
                <p class="text-white">
                    {{Auth::user()->languages }}
                </p>
                <p class="text-white">
                    {{Auth::user()->exp }}
                </p>
            
                <button type="button" class="btn btn-primary btn-sm mt-4" data-toggle="modal" data-target="#exampleModal">
                    Edit
                </button>
        </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{route('update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="text-black bg-gray">Name</label>
                        <input type="text" name="name" class="form-control" value="{{Auth::user()->name }}" required>
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="text" name="email" class="form-control" value="{{Auth::user()->email }}" required>
                    </div>
                    <div class="form-group">
                        <label >Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label >Profile Picture</label>
                        <input type="file" name="profile_picture" class="form-control" value="{{Auth::user()->profile_picture }}">
                    </div>
                    <div class="form-group">
                        <label >Upload CV</label>
                        <input type="file" name="my_cv" class="form-control" value="{{Auth::user()->my_cv }}"required>
                    </div>
                    <div class="form-group">
                        <label >skills</label>
                        <textarea type="text" name="skills" required class="form-control" rows="5" cols="10" value="{{Auth::user()->skills }}">{{Auth::user()->skills }}</textarea>
                    </div>
                    <div class="form-group">
                        <label >Languages</label>
                        <textarea type="text" name="language" class="form-control" required rows="5" cols="10" value="{{Auth::user()->languages }}">{{Auth::user()->languages }}</textarea>
                    </div>
                    <div class="form-group">
                        <label >Years of Experience</label>
                        <input type="number" name="years_of_exp" class="form-control" required  value="{{Auth::user()->years_of_exp }}">
                    </div>
                    <div class="form-group">
                        <label >LinkedinUrl</label>
                        <input type="text" name="linkedin_url" required class="form-control" value="{{Auth::user()->linkedin_url }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  <!-- Modal -->
  
</div>
@endsection