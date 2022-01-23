<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\ActivityRequest;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function store(ActivityRequest $request)
    {
        $activity = Activity::create($request->all());
    }

    public function update(ActivityRequest $request, $id)
    {
        $activity = Activity::find($id);
        $activity->title = $request->title;
        $activity->excerpt = $request->excerpt;
        $activity->description = $request->description;
        $activity->featured_image = $request->featured_image;
        $activity->save();
    }

    public function delete($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
    }
}
