@extends('master')
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item"><a href="">Dash</a></li>
            <li class="breadcrumb-item"><a href="#">Categories</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <div class="card mb-4">
                <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control"  name="name" required>

                        <p class="text-danger"></p>

                    </div>

                    <div class="form-group">
                        <label>Library Name</label>
                        <select class="form-control form-control-lg" name="libraryName">
                            @foreach($libraries as $library)
                            <option value="{{$library->id}}">{{$library->name}}</option>
                                @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
