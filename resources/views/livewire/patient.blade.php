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

    <div class="form-group">
        <label for="exampleInputEmail1">name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="name">
    </div>
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               wire:model="email">
    </div>
    @error('email')
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
        <label for="exampleInputEmail1">password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               wire:model="password">
    </div>
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror



    <button type="submit" class="btn btn-primary" wire:click="addPatient">Submit</button>
</div>
