<div class="mb-3">
    <label for="name" class="form-label">Nama Produk</label>
    <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" id="description" rows="3" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="price" class="form-label">Harga</label>
    <input type="number" name="price" id="price" value="{{ old('price', $product->price ?? '') }}" class="form-control" required>
</div>

<button type="submit" class="btn btn-success">{{ $button }}</button>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
