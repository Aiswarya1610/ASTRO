@include('dashboard.includes.header')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Assign Categories to {{ $user->name }}
            </h3>

        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Assign Categories to {{ $user->name }}</h4>

                        </p>
                        <form method="POST" action="{{ route('users.categories.update', $user->id) }}">
        @csrf

        @foreach($categories as $category)
            <div class="card mb-3">
                <div class="card-header">
                    <label>
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                            {{ $user->categories->contains($category->id) ? 'checked' : '' }}>
                        <strong>{{ $category->name }}</strong>
                    </label>
                </div>

                @if($category->children->count())
                    <div class="card-body">
                        @foreach($category->children as $child)
                            <label class="d-block ps-3">
                                <input type="checkbox" name="categories[]" value="{{ $child->id }}"
                                    {{ $user->categories->contains($child->id) ? 'checked' : '' }}>
                                {{ $child->name }}
                            </label>
                        @endforeach
                    </div>
                @endif
            </div>
        @endforeach

        <button class="btn btn-primary">Save</button>
    </form>

                        
                    </div>
                </div>
            </div>
        </div>


    </div>


    @include('dashboard.includes.footer')