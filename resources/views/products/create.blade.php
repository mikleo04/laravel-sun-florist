@extends('layouts.app')

@section('title', 'Add Flower')

@section('contents')
<hr />
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="container">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="col">
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="product_code" class="form-control" placeholder="Product Code">
        </div>
        <div class="col">
            <textarea class="form-control" name="description" placeholder="Description"></textarea>
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection