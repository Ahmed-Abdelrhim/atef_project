@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    Admin {{Auth::guard('admin')->user()->name}}
                </div>
            </div>
        </div>
    </div>

@endsection
