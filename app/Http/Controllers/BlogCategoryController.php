<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use App\Http\Requests\BlogCategoryRequest;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function store(BlogCategoryRequest $request)
    {
        $blogCategory = BlogCategory::create($request->all());
    }

    public function update(BlogRequest $request, $id)
    {
        $blogCategory = BlogCategory::find($id);
        $blogCategory->category = $request->category;
        $blogCategory->save();
    }

    public function delete($id)
    {
        $blogCategory = BlogCategory::find($id);
        $blogCategory->delete();
    }
}
