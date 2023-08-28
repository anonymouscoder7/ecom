@extends('admin.layout.main')
@section('content')

<div class="card p-4">

    <form action="/save-category" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <input type="text" class="form-control" name="category" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <button type="submit"  class="btn btn-primary form-control">Save</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $cat)
            <tr>
                <th scope="row">{{$cat->id}}</th>
                <td>{{$cat->name}}</td>
                <td>
                    <a href="/edit-category/{{$cat->id}}">Edit</a>
                    <a href="/delete-category/{{$cat->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection