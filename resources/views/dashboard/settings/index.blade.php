@include('dashboard.includes.header')

<!-- Main Page Content -->
   <!-- partial -->
 
      
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Settings
              </h3>
             
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                   <!-- resources/views/dashboard/settings/index.blade.php -->

<form action="{{ route('settings.update') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Site Name</label>
        <input type="text" name="site_name" class="form-control" value="{{ $settings['site_name'] ?? '' }}">
    </div>
    <div class="form-group">
        <label>Admin Email</label>
        <input type="email" name="admin_email" class="form-control" value="{{ $settings['admin_email'] ?? '' }}">
    </div>
  
  
    <div class="form-group">
        <label>Instagram URL</label>
        <input type="text" name="instagram" class="form-control" value="{{ $settings['instagram'] ?? '' }}">
    </div>
    <div class="form-group">
        <label>Facebook URL</label>
        <input type="text" name="facebook" class="form-control" value="{{ $settings['facebook'] ?? '' }}">
    </div>
    <div class="form-group">
        <label>Twitter URL</label>
        <input type="text" name="twitter" class="form-control" value="{{ $settings['twitter'] ?? '' }}">
    </div>
    <div class="form-group">
        <label>Youtube URL</label>
        <input type="text" name="youtube" class="form-control" value="{{ $settings['youtube'] ?? '' }}">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-success">Save</button>
</div>
</form>

                  </div>
                </div>
              </div>
             
              
            </div>
         
         
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         

@include('dashboard.includes.footer')