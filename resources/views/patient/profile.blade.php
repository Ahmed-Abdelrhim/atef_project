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

    </div>

</section>
@endsection
