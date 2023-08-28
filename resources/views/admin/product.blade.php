@extends('admin.layout.main')
@section('content')

<h2>Create Product</h2>
<form action="/save-product" class="p-4" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image </label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" step="any" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category:</label>
        <select class="form-control" id="category_id" name="category_id" required>
            @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<div class="card">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td><img src="{{asset('product/'.$product->image)}}" alt="" width="50"></td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->category['name']}}</td>
                <td>
                    <a href="/edit-product/{{$product->id}}">Edit</a>
                    <a href="/delete-product/{{$product->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection