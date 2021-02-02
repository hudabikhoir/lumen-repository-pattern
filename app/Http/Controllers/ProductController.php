<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductInterface as ProductInterface;

class ProductController extends Controller
{
    private $productRepository;
 
    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function index()
    {
        return $product = $this->productRepository->getAllPagination(5);
    }
}