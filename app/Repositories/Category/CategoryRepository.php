<?php
namespace App\Repositories\Category;
 
use App\Repositories\Category\CategoryInterface as CategoryInterface;
 
use App\Models\Category;
 
class CategoryRepository implements CategoryInterface{
 
    protected $category;
 
    public function __construct(Category $category) {
        $this->category = $category;
    }
    
    public function findById($id) {
        return $this->category->find($id);
    }
    
    public function findBy($column, $data) {
        $result = $this->category->where($column, $data)->get();
        
        return $result;
    }

    public function getAllPagination($page) {
        return $this->category->paginate($page);
    }
    
    public function insert($input) {
        return $this->category->create($input);
    }
    
    public function update($id, $input) {
        return $this->category->where('id', '=', $id)->update($input);
    }

    public function delete($id) {
        return $this->category->where('id', '=', $id)->delete();
    }
}