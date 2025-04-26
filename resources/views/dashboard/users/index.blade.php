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
             
                    <h2>All Users & Assigned Categories</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Categories</th>
            <th>Assign</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @forelse($user->categories as $category)
                        <span class="badge bg-secondary">{{ $category->name }}</span>
                    @empty
                        <em>No categories assigned</em>
                    @endforelse
                </td>
                <td>
                    <a href="{{ route('users.categories.edit', $user->id) }}" class="btn btn-sm btn-primary">
                        Assign
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
            </div>
         
         
          </div>
        

@include('dashboard.includes.footer')