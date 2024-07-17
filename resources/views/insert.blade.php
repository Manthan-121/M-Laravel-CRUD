@extends('layout')

@section('title')
    Insert
@endsection

@section('containt')
    <div class="mt-2">
        <a href="{{ route('home') }}" class="btn btn-danger"><i class="fa-sharp fa-solid fa-home me-1"></i> Home </a>
    </div>
    <div class="container w-50">
        <h3 class="text-center">Add Information</h3>
        <div class="mb-3 bg-dark text-white mt-5 border border border-black p-4 rounded">
            <form action="{{ route('insert') }}" method="POST">
                @csrf
                <div>
                    <label class="form-label">Name</label>
                    <input type="text" name="txtName" class="form-control" placeholder="Full Name">
                </div>
                <div class="mt-2">
                    <label class="form-label">E-Mail</label>
                    <input type="email" name="txtEmail" class="form-control" placeholder="E-mail">
                </div>
                <div class="mt-2">
                    <label class="form-label">Mobile No</label>
                    <input type="number" name="txtMobile" class="form-control" placeholder="Mobile no">
                </div>
                <div class="mt-2">
                    <label class="form-label">City</label>
                    <input type="text" name="txtCity" class="form-control" placeholder="City">
                </div>
                <div class="mt-3">
                    <button type="submit" name="btnInsert" class="form-control btn btn-success"><i
                            class="fa-sharp fa-solid fa-plus me-1"></i> Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
