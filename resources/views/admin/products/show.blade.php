@extends('layouts.admin')
@section('Content')
<table class="table">
<tr>
    
    <td>Tên</td>
    <td>Mô Tả</td>
    <td>Giá</td>
    <td>Phân Loại</td>
    <td>Hình Ảnh</td>
    
</tr>

<tr>

    <td>{{$products -> name}}</td>
    <td>{{$products -> description}}</td>
    <td>{{$products -> price}}</td>
    <td>{{$products -> category_id}}</td>
    <td><img src="{{Vite::asset('public/product/images/'.$products->image)}}" alt=""></td>
    <td>
    <button>
    <form action="/admin/delete-products={{$products->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Xóa">
    </form>
    </button>
    </td>
</tr>
</table>
@endsection