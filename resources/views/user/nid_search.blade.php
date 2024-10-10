@extends('layouts.master')

@section('title', 'Vaccine Registration')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Covid Vaccine Registration</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('nidSearch') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nid">Search By NID:</label>
                            <input type="text" name="nid" id="nid" class="form-control" 
                                placeholder="Enter your NID number" required 
                                pattern="\d{10}|\d{13}|\d{17}" 
                                title="NID must be 10, 13, or 17 digits long.">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </form>
                </div>
            </div>

            @if(isset($nid))
            <div class="card mt-4 shadow-sm">
                <div class="card-header bg-success text-white text-center">
                    <h5>User Details</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NID Number</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $nid }}</td>
                                <td>{{ $statusMessage }}</td>
                            </tr>
                        </tbody>
                    </table>

                    @if($statusMessage === "Not Registered")
                        <div class="text-center">
                            <a href="{{route('userRegisterForm')}}" class="btn btn-success">Register Now</a>
                        </div>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
