@extends('layouts.admin')
@section('content')
    <div class="container col-5 mx-auto">
        <form method="POST" action="{{route('admin.store.update.patient' , $user->id)}}">
            @csrf
            {{--  Success Message  --}}
            @if (Session::has('success'))
                <script>
                    swal({
                        text: " {!! Session::get('success') !!}",
                        icon: "success",
                    })
                </script>
            @endif

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       name="email" value="{{$user->email}}">
            </div>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <div class="form-group">
                <label for="exampleInputEmail1">password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       name="password">
            </div>
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror


{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
            <button type="submit" class="btn" id="submit">Register <span class="fas fa-chevron-right"></span></button>

        </form>
    </div>

    </div>
@endsection
