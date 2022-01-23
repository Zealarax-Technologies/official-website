<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function store(ServiceRequest $request)
    {
        $service = Service::create($request->all());
    }

    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $service->title = $request->title;
        $service->excerpt = $request->excerpt;
        $service->description = $request->description;
        $service->featured_image = $request->featured_image;
        $service->slug = $request->slug;
        $service->save();
    }

    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();
    }
}
