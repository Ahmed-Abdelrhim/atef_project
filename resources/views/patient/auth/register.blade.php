@extends('layouts.user')

@section('content')
    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="{{asset('storage/image/book-img.svg')}}" alt=""/>
        </div>

        <div class="content">
            <h3>stay safe, stay healthy</h3>
            {{--            <form method="POST" action="{{ route('register.submit') }}" enctype="multipart/form-data">--}}
            @csrf
            {{--  Success Message  --}}
            @if (Session::has('error'))
                <script>
                    swal({
                        text: " {!! Session::get('error') !!}",
                        icon: "error",
                    })
                </script>
            @endif
{{--            @livewire('register' , ['doctors' => $doctors] )--}}
            <livewire:register :doctors="$doctors">


            {{--            </form>--}}

        </div>

    </section>

    <!-- home section ends -->
@endsection
