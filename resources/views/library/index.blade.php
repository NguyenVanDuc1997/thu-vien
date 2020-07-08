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
                <div class="card-header"><a href="{{route('library.create')}}" class="btn btn-success">Create</a></div>
                <table class="table table-bordered clone2" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot id="data-users">
                    @foreach($libraries as $key=> $library)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$library->name}}</td>
                            <td>{{$library->address}}</td>
                            <td>{{$library->phone}}</td>
                            <td>
                                @if($library->image)
                                    <img src="{{asset('storage/'.$library->image)}}" alt="" style="width: 200px; height: 200px">
                                @else
                                    {{'Non-image'}}
                                @endif
                            </td>
                            <td>
                                <a href="{{route('library.edit',$library->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('library.destroy',$library->id)}}" class="btn btn-danger" onclick="return confirm('Do you want delete it?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
