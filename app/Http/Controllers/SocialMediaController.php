<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialMediaRequest;
use App\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function store(SocialMediaRequest $request)
    {
        $socialMedia = SocialMedia::create($request->all());
    }

    public function update(SocialMediaRequest $request, $id)
    {
        $socialMedia = SocialMedia::find($id);
        $socialMedia->icon = $request->icon;
        $socialMedia->title = $request->title;
        $socialMedia->url = $request->url;
        $socialMedia->iframe_widget = $request->iframe_widget;
        $socialMedia->save();
    }

    public function delete($id)
    {
        $socialMedia = SocialMedia::find($id);
        $socialMedia->delete();
    }
}
