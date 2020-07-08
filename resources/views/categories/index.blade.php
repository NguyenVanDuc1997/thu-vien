@extends('master')
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item"><a href="">Dash</a></li>
            <li class="breadcrumb-item"><a href="">Library</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-header"><a href="{{route('category.book.create')}}" class="btn btn-success">Create</a></div>
                <table class="table table-bordered clone2" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Library Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot id="data-users">
                    @foreach($categories as $key=> $category)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->library->name}}</td>

                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger" onclick="return confirm('Do you want delete it?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
