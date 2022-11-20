@extends('layouts.user')

@section('content')
<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="{{asset('storage/image/home-img.svg')}}" alt=""/>
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
            <form method="POST" action="{{ route('loginIn') }}" enctype="multipart/form-data">
                @csrf
                {{--  Msg   --}}
                @if(Session::has('email'))
                    <div class="row mr-2 ml-2 col-6 mx-auto">
                        <a  class="btn btn-lg btn-block btn-danger mb-2"
                            id="type-error">{{Session::get('email')}}
                        </a>
                    </div>
                @endif

                        <h1 class="heading"> <span> sign </span> in </h1>
                        <input id="email" type="email"
                                           class="box form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" placeholder="enter your email" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        <input id="password" type="password"
                                           class="box form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password" placeholder="enter your password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        <button type="submit" class="btn">login <span class="fas fa-chevron-right"></span></button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
            </form>

            <a href="{{ route('register') }}" class="btn">Register <span class="fas fa-chevron-right"></span></a>
    </div>

</section>

<!-- home section ends -->
@endsection
