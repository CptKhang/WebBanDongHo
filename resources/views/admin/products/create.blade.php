<!-- resources/views/admin/products/create.blade.php -->

@extends('layouts.admin')
@section('Content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Add New Product</h2>
            <form action="/admin/products" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">    
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="category_id">Category:</label>
                    <select name="category_id" id="category_id" class="form-control" required value="{{old('category_id')}}">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control" required value="{{old('description')}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" required value="{{old('price')}}">
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control-file" required >
                </div>
                <!-- Add other fields if needed -->
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
</div>
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