
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form- label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="box form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
            <input id="email" type="email" class="box form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form- label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="box form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form- label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="box form-control" name="password_confirmation"  autocomplete="new-password">
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form- label text-md-right">Personal Image</label>
        <div class="col-md-6">
            <input type="file" class="box form-control" name="avatar" />
        </div>
    </div>

    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">PSA</label>
        <div class="col-md-6">
            <input type="file" class="box form-control" name="psa" />
        </div>
    </div>

    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">age</label>
        <div class="col-md-6">
            <input type="tel" placeholder="your age" class="box" name="age">
        </div>
    </div>

    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">gender</label>
        <div class="col-md-6">
            <select class="box" name="gender">
                <option value="1">male</option>
                <option value="0">female</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">Doctor</label>
        <div class="col-md-6">
            <select class="box" name="">
                <option> Choose Doctor</option>

                {{--                                    <option value="1"> D/ Mohmed Atef</option>--}}
                {{--                                    <option value="2"> D/ Anas Rabea</option>--}}
                {{--                                    <option value="3"> D/ Mohmed Atef</option>--}}
                {{--                                    <option value="4"> D/ Anas Rabea</option>--}}
                {{--                                    <option value="5"> D/ Mohmed Atef</option>--}}
                {{--                                    <option value="6"> D/ Anas Rabea</option>--}}
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="" class="col-md-4 col-form- label text-md-right">medical history</label>
        <div class="col-md-6">
            <input type="text area" placeholder="enter hereditary medical history" class="box" name="medical_history">
        </div>
    </div>


    <button type="submit" class="btn">Register <span class="fas fa-chevron-right"></span></button>

































{{--Name--}}
{{--<div class="form-group">--}}
{{--    <label for="name">Name</label>--}}
{{--    <input type="text" class="form-control" id="name" wire:model="name" name="name">--}}
{{--</div>--}}
{{--@error('name')--}}
{{--<span class="text-danger">{{$message}}</span>--}}
{{--@enderror--}}


{{--Email--}}
{{--<div class="form-group">--}}
{{--    <label for="email">Email</label>--}}
{{--    <input type="email" class="form-control" id="email" wire:model="email" name="email">--}}
{{--</div>--}}
{{--@error('email')--}}
{{--<span class="text-danger">{{$message}}</span>--}}
{{--@enderror--}}


{{--Password--}}
{{--<div class="form-group">--}}
{{--    <label for="password">Password</label>--}}
{{--    <input type="password" class="form-control" id="name" wire:model="password" name="password">--}}
{{--</div>--}}
{{--@error('password')--}}
{{--<span class="text-danger">{{$message}}</span>--}}
{{--@enderror--}}


{{--Phone Number--}}
{{--<div class="form-group">--}}
{{--    <label for="phone">Phone Number</label>--}}
{{--    <input type="text" class="form-control" id="phone" wire:model="phone" name="phone">--}}
{{--</div>--}}
{{--@error('phone')--}}
{{--<span class="text-danger">{{$message}}</span>--}}
{{--@enderror--}}


{{--Gender--}}
{{--<div class="form-group">--}}
{{--    <select class="custom-select" wire:model="gender">--}}
{{--        <option selected>Choose Gender</option>--}}
{{--        <option value="1">Male</option>--}}
{{--        <option value="0">Female</option>--}}
{{--    </select>--}}
{{--</div>--}}
{{--@error('gender')--}}
{{--<span class="text-danger">{{$message}}</span>--}}
{{--@enderror--}}



{{--Age--}}
{{--<div class="form-group">--}}
{{--    <label for="age">Gender</label>--}}
{{--    <input type="tel" class="form-control" id="age" wire:model="age" name="age">--}}
{{--</div>--}}
{{--@error('age')--}}
{{--<span class="text-danger">{{$message}}</span>--}}
{{--@enderror--}}


{{--PSA--}}
{{--<div class="form-group">--}}
{{--    <label for="psa">PSA</label>--}}
{{--    <input type="file" class="form-control" id="psa" wire:model="psa" name="psa">--}}
{{--</div>--}}
{{--@error('psa')--}}
{{--<span class="text-danger">{{$message}}</span>--}}
{{--@enderror--}}



{{--Personal Image--}}
{{--<div class="form-group">--}}
{{--    <label for="image">Personal Image</label>--}}
{{--    <input type="file" class="form-control" id="image" wire:model="image" name="image">--}}
{{--</div>--}}
{{--@error('image')--}}
{{--<span class="text-danger">{{$message}}</span>--}}
{{--@enderror--}}



{{--<button type="submit" class="btn btn-primary" wire:click="submitForm">Submit</button>--}}
