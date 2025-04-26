@include('dashboard.includes.header')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Categories
            </h3>

        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Categories</h4>

                        </p>
                        <form method="POST" action="{{ route('categories.store') }}" class="row g-3 mb-4">
                            @csrf

                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="name" class="form-control" placeholder="Category or Subcategory Name" required>

                            </div>
                            <div class="form-group">
                                <label>Parent Category</label>
                                <select name="parent_id" class="form-control">
                                    <option value="">Main Category</option>
                                    @foreach($categories as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3">
                                <button class="btn btn-primary w-100">Add</button>
                            </div>
                        </form>

                        <ul class="list-group">
                            @foreach($categories as $category)
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <strong>{{ $category->name }}</strong>
                                    <form method="POST" action="{{ route('categories.destroy', $category) }}">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>

                                @if($category->children->count())
                                <ul class="list-group list-group-flush mt-2">
                                    @foreach($category->children as $child)
                                    <li class="list-group-item ps-4 d-flex justify-content-between">
                                        {{ $child->name }}
                                        <form method="POST" action="{{ route('categories.destroy', $child) }}">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>


    @include('dashboard.includes.footer')