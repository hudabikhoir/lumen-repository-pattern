<?php
 
namespace App\Repositories\Category;
 
interface CategoryInterface {
    //findById function to find category by ID
    public function findById($id);
    //getAllPagination function to get all data category with pagination
    public function getAllPagination($page);
    //insert function to insert to database
    public function insert($input);
    //update function to update with specify id to database
    public function update($id, $input);
    //delete function to delete with id
    public function delete($id);
}