@extends('admin.layouts.base')
@section('title', 'User Manager')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        @if(!empty($listUser))
        <h4 class="card-title "><a href="javascript:void(0)" class="btn btn-danger btn-sm del-arr" data-del="{{route('admin.user.delete-users')}}">Delete</a></h4>
        @else
        <h4 class="card-title ">Users Empty</h4>
        @endif
        <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
    </div>
    <div class="card-body">
        @if(!empty($listUser))
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($listUser as $index=>$user)
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="user[]" type="checkbox" value="{{$user->id}}">
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </td>
                        <td>{{++$index}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="avatar-user"><img src="{{asset($user->avatar)}}" alt="avatar"></td>
                        <td>
                            <select name="" id="" class="form-control pl-2">
                                <option value="1">Admin</option>
                                <option value="0" {{$user->is_admin ? '' : 'selected'}}>User</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end table-respon -->
        @endif
    </div>
    <!-- end card-body -->
</div>
<!-- end card -->
@endsection