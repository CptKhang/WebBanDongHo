@extends('layouts.admin')
@section('Content')

<form action="/admin/update-categories={{$categories->id}}" method="post">
    @csrf
<input type="hidden" name="_method" value="PUT">
<input type="text" name="id" id="" value="{{$categories->id}}" disabled>
<input type="text" name="name" id="" value="{{$categories->name}}">

<input type="submit" value="Sửa">
</form>
@endsection