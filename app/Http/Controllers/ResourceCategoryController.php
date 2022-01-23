<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceCategoryRequest;
use App\ResourceCategory;
use Illuminate\Http\Request;

class ResourceCategoryController extends Controller
{
    public function store(ResourceCategoryRequest$request)
    {
        $resourceCategory = ResourceCategory::create($request->all());
    }

    public function update(ResourceCategoryRequest $request, $id)
    {
        $resourceCategory = ResourceCategory::find($id);
        $resourceCategory->title = $request->title;
        $resourceCategory->save();
    }

    public function delete($id)
    {
        $resourceCategory = ResourceCategory::find($id);
        $resourceCategory->delete();
    }
}
