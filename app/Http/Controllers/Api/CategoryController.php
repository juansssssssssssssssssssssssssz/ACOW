<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function get()
    {
        return response()->json(['data' => Category::with('quotes')->get()], 200);
    }

    public function add(CategoryRequest $request)
    {
        $request->validated();

        $newCategory = new Category(request()->all());
        $newCategory->save();
        return response()->json($newCategory);
    }


    public function update(CategoryRequest $request, $categoryId)
    {
        $request->validate();

        $data = $request->json()->all();
        $category = Category::find($categoryId);
        $category->update($data);
        return response()->json($category);
    }


    public function delete($categoryId)
    {
        $category = Category::find($categoryId);
        $result = $category->delete();

        if ($result)
            return ["result" => "success"];
        else
            return ["result" => "fail"]; // Falla cuando no viene id
    }
}
