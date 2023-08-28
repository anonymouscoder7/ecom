@extends('admin.layout.main')
@section('content')

<div class="card p-4">

    <form action="/update-category/{{$category->id}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <input type="text" class="form-control" name="category" value="{{$category->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <button type="submit"  class="btn btn-primary form-control">Update</button>
        </div>
    </form>
</div>
@endsection