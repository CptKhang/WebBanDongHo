@extends('layouts.admin')
@section('Content')

<form action="/admin/categories" method="post">
    Name: <input type="text" name="name" id="">
    @csrf
    <input type="submit" value="Thêm">
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif

@endsection

