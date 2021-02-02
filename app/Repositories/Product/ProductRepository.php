<?php
namespace App\Repositories\Product;
 
use App\Repositories\Product\ProductInterface as ProductInterface;
 
use App\Models\Product;
 
class ProductRepository implements ProductInterface{
 
    protected $Product;
 
    public function __construct(Product $Product)
    {
        $this->Product = $Product;
    }
    public function findById($id)
    {
        return $this->Product->find($id);
    }
    public function getAllPagination($page)
    {
        return $this->Product->paginate($page);
    }
}