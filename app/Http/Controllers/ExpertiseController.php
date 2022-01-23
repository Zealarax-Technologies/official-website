<?php

namespace App\Http\Controllers;

use App\Expertise;
use App\Http\Requests\ExpertiseRequest;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function store(ExpertiseRequest $request)
    {
        $expertise = Expertise::create($request->all());
    }

    public function update(ExpertiseRequest $request, $id)
    {
        $expertise = Expertise::find($id);
        $expertise->title = $request->title;
        $expertise->excerpt = $request->excerpt;
        $expertise->description = $request->description;
        $expertise->featured_image = $request->featured_image;
        $expertise->save();
    }

    public function delete($id)
    {
        $expertise = Expertise::find($id);
        $expertise->delete();
    }

}
