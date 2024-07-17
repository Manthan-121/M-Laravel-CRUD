@extends('layout')

@section('title')
    Edit
@endsection

@section('containt')
    <div class="mt-2">
        <a href="{{ route('home') }}" class="btn btn-danger"><i class="fa-sharp fa-solid fa-home me-1"></i> Home </a>
    </div>
    <div class="container w-50">
        <h3 class="text-center">Update Information</h3>
        <form action="{{ route('update') }}" method="POST">
            @csrf
            @foreach ($data as $key => $pgdata)
            <input type="hidden" name="hdnId" value="{{ $pgdata->id }}">
            <div class="mb-3 bg-dark text-white mt-5 border border border-black p-4 rounded">
                <div>
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Full Name" value="{{ $pgdata->name }}" name="txtName">
                </div>
                <div class="mt-2">
                    <label class="form-label">E-Mail</label>
                    <input type="email" class="form-control" placeholder="E-mail" value="{{ $pgdata->email }}" name="txtEmail">
                </div>
                <div class="mt-2">
                    <label class="form-label">Mobile No</label>
                    <input type="number" class="form-control" placeholder="Mobile no" value="{{ $pgdata->mobile_no }}" name="txtMobile">
                </div>
                <div class="mt-2">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" placeholder="City" value="{{ $pgdata->city }}" name="txtCity">
                </div>
                <div class="mt-3">
                    <button type="submit" class="form-control btn btn-success"><i
                            class="fa-sharp fa-solid fa-pen-to-square me-2"></i> Update</button>
                </div>
            </div>
            @endforeach
        </form>
    </div>
    <div>

        
        
    </div>
@endsection
