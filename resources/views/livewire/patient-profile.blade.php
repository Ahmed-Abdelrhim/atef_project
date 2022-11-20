{{--Name--}}
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" wire:model="name" name="name">
</div>
@error('name')
<span class="text-danger">{{$message}}</span>
@enderror


{{--Email--}}
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" wire:model="email" name="email">
</div>
@error('email')
<span class="text-danger">{{$message}}</span>
@enderror


{{--Password--}}
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="name" wire:model="password" name="password">
</div>
@error('password')
<span class="text-danger">{{$message}}</span>
@enderror


{{--Phone Number--}}
<div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="text" class="form-control" id="phone" wire:model="phone" name="phone">
</div>
@error('phone')
<span class="text-danger">{{$message}}</span>
@enderror


{{--Gender--}}
<div class="form-group">
    <select class="custom-select" wire:model="gender">
        <option selected>Choose Gender</option>
        <option value="1">Male</option>
        <option value="0">Female</option>
    </select>
</div>
@error('gender')
<span class="text-danger">{{$message}}</span>
@enderror



{{--Age--}}
<div class="form-group">
    <label for="age">Gender</label>
    <input type="tel" class="form-control" id="age" wire:model="age" name="age">
</div>
@error('age')
<span class="text-danger">{{$message}}</span>
@enderror


{{--PSA--}}
<div class="form-group">
    <label for="psa">PSA</label>
    <input type="file" class="form-control" id="psa" wire:model="psa" name="psa">
</div>
@error('psa')
<span class="text-danger">{{$message}}</span>
@enderror



{{--Personal Image--}}
<div class="form-group">
    <label for="image">Personal Image</label>
    <input type="file" class="form-control" id="image" wire:model="image" name="image">
</div>
@error('image')
<span class="text-danger">{{$message}}</span>
@enderror



<button type="submit" class="btn btn-primary" wire:click="submitForm">Submit</button>
