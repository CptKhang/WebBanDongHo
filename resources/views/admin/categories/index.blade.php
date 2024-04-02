@extends('layouts.admin')
@section('Content')
<table class="table">
<tr>
    <td>ID</td>
    <td>Tên</td>
    <td>Chức Năng</td>
</tr>
@foreach ($cate as $item)
<tr>
    <td>{{$item -> id}}</td>
    <td>{{$item -> name}}</td>
    <td>
    <button class="fa-solid fa-trash-can-arrow-up"> 
    <form action="/admin/delete-categories={{$item->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Xóa">
    </form>
    </button>
        <button class="btn-box"> <a href="/admin/edit-categories={{$item->id}}">Sửa </a></button>
    </td>
</tr>
 
@endforeach 
</table>
@endsection