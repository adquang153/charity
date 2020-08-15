@extends('admin.layouts.base')

@section('content')
    <form method="post" action="{{route('admin.user.update', 0)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="file" name="image" class="form-control">
        <button type="submit" class="btn btn-outline-dark btn-sm">Submit</button>
    </form>
@endsection