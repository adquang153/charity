@extends('admin.layouts.base')

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <!-- <p class="card-category">Complete your profile</p> -->
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.user.update', $user->id)}}">
                    @csrf
                    @method('PATCH')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email address</label>
                            <input type="email" value="{{$user->email}}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Username</label>
                            <input type="text" value="{{$user->user_name}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Phone</label>
                            <input type="text" value="{{$user->phone}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Price total</label>
                            <input type="number" value="{{$user->price_total}}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="javascript:;">
                    <img class="img" src="{{asset($user->avatar)}}" />
                </a>
            </div>
        <div class="card-body">
            <!-- <h6 class="card-category text-gray">CEO / Co-Founder</h6> -->
            <h4 class="card-title">{{$user->user_name}}</h4>
            <!-- <p class="card-description">
            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
            <a href="javascript:;" class="btn btn-primary btn-round">Follow</a> -->
            <a href="" class="btn btn-primary btn-round">Change Avatar</a>
        </div>
    </div>
</div>

@endsection