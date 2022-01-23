<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function store(PortfolioRequest $request)
    {
        $portfolio = Portfolio::create($request->all());
    }

    public function update(PortfolioRequest $request, $id)
    {
        $blog = Portfolio::find($id);
        $blog->title = $request->title;
        $blog->product_name = $request->product_name;
        $blog->description = $request->description;
        $blog->url = $request->url;
        $blog->featured_image = $request->featured_image;
        $blog->service_id = $request->service_id;
        $blog->slug = $request->slug;
        $blog->ui_position_x = $request->ui_position_x;
        $blog->save();
    }

    public function delete($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
    }

}
