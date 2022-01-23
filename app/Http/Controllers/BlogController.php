<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(BlogRequest $request)
    {
        $blog = Blog::create($request->all());
    }

    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->featured_image = $request->featured_image;
        $blog->slug = $request->slug;
        $blog->author_name = $request->author_name;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->save();
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
    }
}
