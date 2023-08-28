@extends('admin.layout.main')
@section('content')

<h2>Update Product</h2>
<form action="/update-product/{{$product->id}}" class="p-4" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" value="{{$product->name}}" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" required>{{$product->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image </label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" step="any" class="form-control" value="{{$product->price}}" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control" id="quantity" value="{{$product->quantity}}" name="quantity" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category:</label>
        <select class="form-control" id="category_id" name="category_id" required>
            @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection