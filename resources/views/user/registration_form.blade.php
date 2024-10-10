@extends('layouts.master')

@section('title', 'Vaccine Registration')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h4>Covid Vaccine Registration</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <br>
                <form action="{{ route('registerSubmit') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="nid">NID</label>
                        <input type="text" name="nid" id="nid" class="form-control" placeholder="Enter your NID" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="vaccine_center_id">Vaccine Center</label>
                        <select name="vaccine_center_id" id="vaccine_center_id" class="form-control" required>
                            <option value="">Select a vaccine center</option>
                            @foreach($centers as $center)
                                <option value="{{ $center->id }}">{{ $center->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
