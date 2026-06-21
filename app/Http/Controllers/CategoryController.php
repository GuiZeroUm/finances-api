<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show(Category $categoryId)
    {
        return $categoryId;
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());

        return response()->json($category, 201);
    }

    public function update(Request $request, Category $categoryId)
    {
        $categoryId->update($request->all());

        return response()->json($categoryId, 200);
    }

    public function destroy(Category $categoryId)
    {
        $categoryId->delete();

        return response()->json(null, 204);
    }
}
