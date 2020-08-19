@extends('admin.layouts.base')

@section('content')
<form method="post" action="{{route('admin.campaign.store')}}" >
    @csrf
    <input type="file" name="image">
    <button type="submit">submit</button>
</form>
@endsection