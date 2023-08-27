@extends('admin.layout.main')
@section('content')

<div class="card p-4">

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection