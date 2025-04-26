@include('dashboard.includes.header')

<!-- Main Page Content -->
   <!-- partial -->
 
      
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
             
            </div>
            <div class="row">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>

        <div class="mb-3">
            <label>Photo</label>
            <input type="file" name="photo" class="form-control">
            @if($user->photo)
                <img src="{{ asset('uploads/' . $user->photo) }}" width="120" class="mt-2">
            @endif
        </div>

        <button class="btn btn-primary">Update</button>
    </form>

             
              
            </div>
         
         
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         

@include('dashboard.includes.footer')