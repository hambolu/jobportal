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
            <form action="{{route('profile.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
                    <input name="_method" type="hidden" value="PATCH">
                <div class="form-group">
                    <label class="text-black bg-gray">Name</label>
                    <input type="text" name="name" class="form-control" value="{{Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="text" name="email" class="form-control" value="{{Auth::user()->email }}">
                </div>
                <div class="form-group">
                    <label >Phone Number</label>
                    <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone }}">
                </div>
                <div class="form-group">
                    <label >Profile Picture</label>
                    <input type="file" name="profile_picture" class="form-control" >
                </div>
                <div class="form-group">
                    <label >Upload CV</label>
                    <input type="file" name="my_cv" class="form-control" >
                </div>
                <div class="form-group">
                    <label >skills</label>
                    <textarea type="text" name="skills" class="form-control" rows="5" cols="10"></textarea>
                </div>
                <div class="form-group">
                    <label >Languages</label>
                    <textarea type="text" name="language" class="form-control" rows="5" cols="10"></textarea>
                </div>
                <div class="form-group">
                    <label >LinkedinUrl</label>
                    <input type="text" name="linkedin_url" class="form-control" value="{{Auth::user()->linkedin_url }}">
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