@extends('layouts.admin')
@section('Content')
<div class="container">
<table class="table">
<tr>
    <td>ID</td>
    <td>Tên</td>
    <td>Giá</td>
    <td>Chi Tiết</td>
</tr>
@foreach ($products as $item)
<tr>
    <td>{{$item -> id}}</td>
    <td>{{$item -> name}}</td>
    <td>{{$item -> price}}</td>
    
    <td>
     <button class="btn-box"> <a href="/admin/show-products={{$item->id}}">Chi Tiết </a></button>
     </td>
</tr>
@endforeach 
</table>
</div>
@endsection