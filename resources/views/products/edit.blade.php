@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('products.form', ['button' => 'Update'])
    </form>
</div>
@endsection
