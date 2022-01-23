<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceRequest;
use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function store(ResourceRequest $request)
    {
        $resources = Resource::create($request->all());
    }

    public function update(ResourceRequest $request, $id)
    {
        $resources = Resource::find($id);
        $resources->title = $request->title;
        $resources->description = $request->description;
        $resources->url = $request->url;
        $resources->save();
    }

    public function delete($id)
    {
        $resources = Resource::find($id);
        $resources->delete();
    }
}
