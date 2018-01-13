@extends('layouts.app')

@section('title')
    <title>Pokemart - Profile</title>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card col-lg-6">
                <h1 class="card-title display-3 text-center">Profile</h1>
                <hr>
                <form class="card-body" action="{{ROUTE('post.profile',['id'=>Auth::user()->id])}}" METHOD="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field('put')}}

                    @if(Storage::disk('local')->has(Auth::user()->picture))
                        <img src="{{ROUTE('get.user.image',['filename'=> Auth::user()->picture])}}" class="rounded mx-auto d-block">
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control {{$errors->has('email')? 'is-invalid' : ''}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{Auth::user()->email}}">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="profilePicture">Profile Picture</label>
                        <input type="file" name="picture" class="form-control {{$errors->has('picture')? 'is-invalid' : ''}}" id="profilePicture" value="{{Auth::user()->picture}}">
                        @if($errors->has('picture'))
                            <div class="invalid-feedback">
                                {{$errors->first('picture')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-check form-check-inline">
                        @if(Auth::user()->gender == 'male')
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                        @else
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        @endif
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        @if(Auth::user()->gender == 'female')
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked>
                        @else
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        @endif
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
                        <input type="date" name="dob" class="form-control {{$errors->has('dob')? 'is-invalid' : ''}}" id="dateOfBirth" aria-describedby="emailHelp" value="{{Auth::user()->date_of_birth}}">
                        @if($errors->has('dob'))
                            <div class="invalid-feedback">
                                {{$errors->first('dob')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea class="form-control {{$errors->has('address')? 'is-invalid' : ''}}" name="address" id="exampleFormControlTextarea1" rows="3">{{Auth::user()->address}}</textarea>
                        @if($errors->has('address'))
                            <div class="invalid-feedback">
                                {{$errors->first('address')}}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection