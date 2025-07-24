@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        @include('products.form', ['button' => 'Simpan'])
    </form>
</div>
@endsection
