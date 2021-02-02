<?php
namespace App\Repositories\Category;
use Illuminate\Support\ServiceProvider;
 
class CategoryRepoServiceProvider extends ServiceProvider{
    public function boot(){}
 
    public function register(){
        $this->app->bind('App\Repositories\Category\CategoryInterface', 
        'App\Repositories\Category\CategoryRepository');
    }
}