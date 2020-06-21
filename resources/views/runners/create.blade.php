@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{route('runners.store')}}" method="POST" class="runner-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') error @enderror" name="username" id="username" placeholder="username" value="{{old('username')}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control @error('phone') error @enderror" name="phone" id="phone" placeholder="phone" value="{{old('phone')}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="femail">Female</label>
            <br>
            @error('gender')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <select class="form-control @error('city') error @enderror" name="city" id="city">
                <option value="">Select City</option>
                @foreach ($cities as $key => $city)
                    <option value="{{$key}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="birthday">Date of Birth</label>
            <input type="date" class="form-control @error('birthday') error @enderror" name="birthday" id="birthday" value="{{old('birthday')}}">
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input class="form-control @error('weight') error @enderror" type="number" name="weight" id="weight" value="{{old('weight')}}">
        </div>
        <div class="form-group">
            <label class="control-label">Profile Image*</label><br/>
            <img src="" width="80px" height="80px" id="product_image">
            <input class="form-control" type="file" name="image" value="" id="product_img" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{url('runners')}}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>
@endsection