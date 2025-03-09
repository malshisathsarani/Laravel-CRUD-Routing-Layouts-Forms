@extends('layout.app')

@section('page')
<div class="row h-100 justify-content-center">
    <div class="col-lg-6 self-center">
        <div class="card shadow" style="margin-top:100px;">
            <div class="card-body">
                <a href="{{ route('products.create') }}" class="btn btn-dark" style="float: right">New Product</a>
                <h1>All Products</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>${{ $product->price }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Info</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                <a href="javascript:void(0)" onclick="deleteConfirm('{{ route('products.destroy', $product->id) }}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteConfirm(url){
        $.confirm({
            title: 'Are you Sure!',
            content: 'Do you want to delete this product?',
            buttons: {
                confirm: function () {
                    window.location.href = url;
                },
                cancel: function () {
                },
            }
        });
    }
</script>
@endsection
