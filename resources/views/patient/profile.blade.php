@extends('layouts.user')
@section('content')
<section class="about" id="about">

    <h1 class="heading"> <span>profile</span> details </h1>

    <div class="row">

        <div class="img">
            <img src="{{asset('storage/image/pic-8.jpg')}}" alt=""/>
            <p class="name">
                {{ Auth::user()->name }}
            </p>
            <p>patient</p>
        </div>

        <div class="content">
            <h3>more information</h3>
            <h2>phone number: <span class=""> 01014012312 </span></h2>
            <h2>age: <span class=""> 22 </span></h2>
            <h2>gender: <span class="">male</span></h2>
            <h2>doctor: <span class=""> Dr / mohamed atef </span></h2>
            <h2>hereditary medical history: <span class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</span></h2>
            <h2>PSA : <span class="">  </span></h2>
            <a href="#" class="btn"> update profile <span class="fas fa-chevron-right"></span> </a>
        </div>

{{--        @livewire('patient-profile')--}}



{{--        <form>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Email address</label>--}}
{{--                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">Password</label>--}}
{{--                <input type="password" class="form-control" id="exampleInputPassword1">--}}
{{--            </div>--}}
{{--            <div class="form-group form-check">--}}
{{--                <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}

    </div>

</section>
@endsection
