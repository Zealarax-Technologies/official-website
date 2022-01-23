<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechnologyRequest;
use App\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function store(TechnologyRequest $request)
    {
        $technology = Technology::create($request->all());
    }

    public function update(TechnologyRequest $request, $id)
    {
        $technology = Technology::find($id);
        $technology->name = $request->name;
        $technology->description = $request->description;
        $technology->slug = $request->slug;
        $technology->save();
    }

    public function delete($id)
    {
        $technology = Technology::find($id);
        $technology->delete();
    }
}
