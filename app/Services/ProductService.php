<?php
// app/Services/ProductService.php
namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;

class ProductService
{
    protected $repo;

    public function __construct(ProductRepository $repo)
    {
        $this->repo = $repo;
    }

    public function listProducts()
    {
        return $this->repo->allPaginated();
    }

    public function storeProduct($data)
    {
        return $this->repo->create($data);
    }

    public function findProduct($id)
    {
        return $this->repo->find($id);
    }

    public function updateProduct($id, $data)
    {
        try {
            $product = $this->repo->find($id);

            if (!$product) {
                return null;
            }

            return $this->repo->update($product, $data);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function deleteProduct($id)
    {
        return $this->repo->delete($id);
    }

    // lanjutkan untuk updateProduct, deleteProduct, dsb
}
