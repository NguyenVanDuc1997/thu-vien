@extends('master')
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item"><a href="">Dash</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <div class="card mb-4">

            <div class="card-body">
                <form method="post" action="{{route('library.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control"  name="name" required>

                            <p class="text-danger"></p>

                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control"  name="phone" required>
                    </div>

                    <div class="form-group">

                        <label for="exampleFormControlFile1">Image</label>

                        <input type="file" name="image" class="form-control-file" >

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
