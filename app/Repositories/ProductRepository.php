<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function allPaginated($perPage = 10)
    {
        return Product::latest()->paginate($perPage);
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function update(Product $product, array $data)
    {
        $product->update($data);
        return $product;
    }

    public function delete($id)
    {
        $product = $this->find($id);
        $product->delete();
        return $product;
    }

    // tambahkan fungsi lain: find, update, delete
}
