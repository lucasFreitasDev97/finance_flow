<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(): View
    {
        $categories = Category::all();
        return \view('categories.index', ['categories' => $categories]);
    }

    public function form(Category $category = null): View
    {
        if ($category){
            $category = $this->categoryService->findCategory($category);
        }

        return \view('categories.form', ['category' => $category]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $this->categoryService->storeCategory($data);

        return redirect(route('categories.index'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $data = $request->all();
        $this->categoryService->updateCategory($category, $data);

        return redirect(route('categories.index'));
    }

    public function destroy(Category $category): RedirectResponse
    {
        $this->categoryService->destroyCategory($category);

        return redirect(route('categories.index'));
    }
}
