<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function store(AboutRequest $request)
    {
        $about = About::create($request->all());
    }

    public function update(AboutRequest $request, $id)
    {
        $about = About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->featured_image = $request->featured_image;
        $about->ui_position_x = $request->ui_position_x;
        $about->save();
    }

    public function delete($id)
    {
        $about = About::find($id);
        $about->delete();
    }


}
