@extends('layout')

@section('title')
    Show
@endsection

@section('containt')
    <div class="mt-2">
        <a href="{{ route('add') }}" class="btn btn-danger"><i class="fa-sharp fa-solid fa-plus me-1"></i> Add </a>
    </div>
    <div class="mt-2">
        <table class="table table-secondary table-bordered border-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">City</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $pgdata)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $pgdata->name }}</td>
                    <td>{{ $pgdata->email }}</td>
                    <td>{{ $pgdata->mobile_no }}</td>
                    <td>{{ $pgdata->city }}</td>
                    <td>
                        <a href="{{ route('edit',$pgdata->id) }}" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen-to-square me-2"></i>Edit</a>
                        <a href="{{ route('delete',$pgdata->id) }}" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash me-2"></i>Delete</a>

                    </td>
                </tr>  
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
