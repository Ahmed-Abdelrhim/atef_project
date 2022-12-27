@extends('layouts.user')
@section('content')
    <section class="about" id="about">

        <h1 class="heading"><span>profile</span> details </h1>

        <div class="row">

            <div class="img">
                @if(Auth::check())
                    @if(Auth::user()->image != null )
                        <img src="{{asset('storage/patients/'.Auth::user()->image)}}" alt="not-found"/>
                    @else
                        <img src="{{asset('storage/patients/alt.webp') }}" alt="not-found"/>
                    @endif
                @endif
                <p class="name">
                    {{ Auth::user()->name }}
                </p>
                <p>patient</p>
            </div>

            <div class="content">
                <h3>more information</h3>
                <h2>phone number:
                    <span class="">
                    @if(Auth::user()->phone_number !=null)
                            {{Auth::user()->phone_number}}
                        @else
                            No Phone Number Yet
                        @endif
                </span>
                </h2>
                <h2>age:
                    <span class="">
                        @if(Auth::user()->age !=null)
                            {{Auth::user()->age}}
                        @else
                            No Age
                        @endif
                </span>
                </h2>
                <h2>gender:
                    <span class="">
                        @if(Auth::user()->gender !=null)
                            {{Auth::user()->gender ? 'Male' : 'Female'}}
                        @else
                            No Gender
                        @endif
                    </span>
                </h2>
                <h2>doctor:
                    <span class="">
                        @if($doctor != null)
                            {{$doctor->name}}
                        @else
                            Doctor Is Not Selected
                        @endif
                    </span>
                </h2>
                <h2>hereditary medical history:
                    <span class="">
                        @if(Auth::user()->medical_history !=null)
                            {{Auth::user()->medical_history}}
                        @else
                            No Medical History Yet
                        @endif
                    </span>
                </h2>
                <h2>PSA :
                    <span class="">
                        @if(Auth::user()->psa !=null)
                            <img class="psa-img" src="{{asset('storage/psa/'.Auth::user()->psa)}}" alt="not-found"/>
                        @else
                            No Biopsy image Yet
                        @endif
                    </span>
                    <span>Result: cancer </span>
                </h2>
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
