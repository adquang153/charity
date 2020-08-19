@extends('view.layouts.base')

@section('content')
<?php $check = $user->id == Auth()->user()->id??0; ?>

<div class="container bootstrap snippet py-5 mt-5">
    <form class="row" action="{{route('view.edit-profile', $user->id)}}" method="post" id="registrationForm" enctype="multipart/form-data">
        @if($check)
            @csrf
        @endif
        <div class="col-sm-3">
            <!--left col-->
            <div class="text-center">
                <img src="{{asset( $user->avatar ?? 'images/user.png')}}"
                    class="avatar-profile img-circle img-thumbnail" width="200px" alt="avatar">
                <h6 class="mt-3">Change Avatar</h6>
                <input type="file" name="avatar" class="text-center center-block file-upload">
            </div>
            </hr><br>
        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="">
                        <h1>{{$user->name}}</h1>
                    </div>
                    <hr>
                    <div class="form">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="name">
                                    <h4>User name</h4>
                                </label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="first name" value="{{$user->name}}" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="number_phone">
                                    <h4>Phone</h4>
                                </label>
                                <input type="number" class="form-control" min=0 name="number_phone" id="number_phone"
                                    placeholder="enter phone" value="{{$user->number_phone}}" title="enter your phone number if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="you@email.com" value="{{$user->email}}" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <h4>Price Total: <span>0</span></h4>
                            </div>
                        </div>
                        
                        @if($check)
                        <div class="form-group button-profile">
                            <div class="col-xs-12 pt-2 d-flex justify-content-between">
                                <button class="btn border" type="reset">
                                    <i class="glyphicon glyphicon-repeat"></i> Hủy
                                </button>
                                <button class="btn btn-success" type="submit">
                                    <i class="glyphicon glyphicon-ok-sign"></i> Lưu
                                </button>
                            </div>
                        </div>
                        @endif
                    </div>
                    <hr>
                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->
        </div>
        <!--/col-9-->
    </div>
    <!--/row-->
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.avatar-profile').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".file-upload").on('change', function(){
            readURL(this);
        });
        @if(!$check)
            $('#registrationForm input').prop('disabled', true);
        @endif
    });
</script>
@endsection