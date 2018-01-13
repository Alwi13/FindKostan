@extends('layouts.app')

@section('title')
    <title>Pokemart - Register</title>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card col-lg-6">
                <h1 class="card-title display-3 text-center">Register</h1>
                <hr>
                <form class="card-body" action="{{ROUTE('post.register')}}" METHOD="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control {{$errors->has('email')? 'is-invalid' : ''}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control {{$errors->has('password')? 'is-invalid' : ''}}" id="exampleInputPassword1" placeholder="Password">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="profilePicture">Profile Picture</label>
                        <input type="file" name="picture" class="form-control {{$errors->has('picture')? 'is-invalid' : ''}}" id="profilePicture">
                        @if($errors->has('picture'))
                            <div class="invalid-feedback">
                                {{$errors->first('picture')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    @if($errors->has('gender'))
                        <div class="invalid-feedback">
                            {{$errors->first('gender')}}
                        </div>
                    @endif
                    <span class="clearfix"></span>
                    <div class="form-group">
                        <label for="dateOfBirth">Date of Birth</label>
                        <input type="date" name="dob" class="form-control {{$errors->has('dob')? 'is-invalid' : ''}}" id="dateOfBirth" aria-describedby="emailHelp">
                        @if($errors->has('dob'))
                            <div class="invalid-feedback">
                                {{$errors->first('dob')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea class="form-control {{$errors->has('address')? 'is-invalid' : ''}}" name="address" id="exampleFormControlTextarea1" rows="3">{{old('address')}}</textarea>
                        @if($errors->has('address'))
                            <div class="invalid-feedback">
                                {{$errors->first('address')}}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection