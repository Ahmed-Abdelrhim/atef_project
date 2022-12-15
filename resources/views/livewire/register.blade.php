<div>
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form- label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="box form-control @error('name') is-invalid @enderror"
                   name="name"  required wire:model="name">

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form- label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="box form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required autocomplete="email" wire:model="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone_number" class="col-md-4 col-form- label text-md-right">{{ __('Phone Number') }}</label>

        <div class="col-md-6">
            <input id="phone_number" type="text" class="box form-control @error('phone_number') is-invalid @enderror"
                   name="phone_number" value="{{ old('phone_number') }}" autocomplete="phone_number" wire:model="phone_number">

            @error('phone_number')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form- label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password"
                   class="box form-control @error('password') is-invalid @enderror" name="password"
                   autocomplete="new-password" wire:model="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm"
               class="col-md-4 col-form- label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="box form-control"
                   name="password_confirmation" autocomplete="new-password" wire:model="password_confirmation">
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form- label text-md-right">Personal Image</label>
        <div class="col-md-6">
            <input type="file" class="box form-control" name="avatar"  wire:model="avatar"/>
        </div>
    </div>

    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">Biopsy image</label>
        <div class="col-md-6">
            <input type="file" class="box form-control @error('psa') is-invalid @enderror" name="psa" wire:model="psa"/>
        </div>
    </div>

    @error('psa')<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>@enderror

    <div class="row mb-3">
        <label for="age" class="col-md-4 col-form- label text-md-right">age</label>
        <div class="col-md-6">
            <input type="tel" required placeholder="your age" class="box @error('age') is-invalid @enderror" name="age" wire:model="age">
            @error('age')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>



    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">gender</label>
        <div class="col-md-6">
            <select class="box @error('gender') is-invalid @enderror" name="gender" wire:model="gender">
                <option selected>Choose Gender</option>
                <option value="1">male</option>
                <option value="0">female</option>
            </select>

            @error('gender')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">Doctor</label>
        <div class="col-md-6">
            <select class="box @error('doctor_id') is-invalid @enderror" name="doctor_id" wire:model="doctor_id">
                <option> Choose Doctor</option>
                @if(isset($doctors) && count($doctors) > 0)
                    @foreach($doctors as $doc)
                        <option value="{{$doc->id}}">{{$doc->name}}</option>
                    @endforeach
                @endif

                {{--                                    <option value="1"> D/ Mohmed Atef</option>--}}
                {{--                                    <option value="2"> D/ Anas Rabea</option>--}}
                {{--                                    <option value="3"> D/ Mohmed Atef</option>--}}
                {{--                                    <option value="4"> D/ Anas Rabea</option>--}}
                {{--                                    <option value="5"> D/ Mohmed Atef</option>--}}
                {{--                                    <option value="6"> D/ Anas Rabea</option>--}}
            </select>
            @error('doctor_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

        </div>
    </div>





    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">medical history</label>
        <div class="col-md-6">
            <input type="text area" placeholder="enter hereditary medical history" class="box @error('medical_history') is-invalid @enderror"
                   name="medical_history" wire:model="medical_history">
            @error('medical_history')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

        </div>
    </div>




    <button wire:click="submit" class="btn" id="submit">
        Register
        <span class="fas fa-chevron-right"> </span>
    </button>




</div>
