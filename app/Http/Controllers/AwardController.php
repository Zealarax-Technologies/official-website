<?php

namespace App\Http\Controllers;

use App\Award;
use App\Http\Requests\AwardRequest;
use Illuminate\Http\Request;

class AwardController extends Controller
{

    public function store(AwardRequest $request)
    {
        $award = Award::create($request->all());
    }

    public function update(AwardRequest $request, $id)
    {
        $award = Award::find($id);
        $award->title = $request->title;
        $award->description = $request->description;
        $award->picture = $request->picture;
        $award->save();
    }

    public function delete($id)
    {
        $award = Award::find($id);
        $award->delete();
    }
}
