<?php
 
namespace App\Repositories\Product;
 
interface ProductInterface {
    public function findById($id);
    public function getAllPagination($page);
}