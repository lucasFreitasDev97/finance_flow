<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function findCategory(Category $category): Category
    {
        return Category::find($category->getKey());
    }
    public function storeCategory(array $data) :void
    {
        $category = new Category();
        $category->name = $data['name'];
        $category->type = $data['type'];
        $category->save();
    }

    public function updateCategory(Category $category, array $data) :void
    {
        $category->update($data);
    }

    public function destroyCategory(Category $category) :void
    {
        $category->delete();
    }
}
