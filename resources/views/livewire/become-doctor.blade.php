<div>
    {{--  Success Message  --}}
    @if (Session::has('success'))
        <script>
            swal({
                text: " {!! Session::get('success') !!}",
                icon: "success",
            })
        </script>
    @endif


    {{--  Error Message  --}}
    @if (Session::has('error'))
        <script>
            swal({
                text: " {!! Session::get('error') !!}",
                icon: "wrong",
            })
        </script>
    @endif

    <div class="form-group">
        <label for="exampleInputEmail1">name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="name">
    </div>
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">Create An Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               wire:model="email">
    </div>
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror


    <div class="form-group">
        <label for="exampleInputEmail1">Create A Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               wire:model="password">
    </div>
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">phone</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               wire:model="phone">
    </div>
    @error('phone')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               wire:model="address">
    </div>
    @error('address')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">Personal Image</label>
        <input type="file" class="form-control"
               wire:model="personal_image">
    </div>
    @error('personal_image')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">ID National Card</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               wire:model="id_national_card">
    </div>
    @error('id_card')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">ID OF Job Profession</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               wire:model="id_job_card">
    </div>
    @error('id_job_card')
    <span class="text-danger">{{$message}}</span>
    @enderror


    <button type="submit" class="btn btn-primary" wire:click="addDoctor">Submit</button>
</div>
