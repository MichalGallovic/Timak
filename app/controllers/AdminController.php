<?php

use Illuminate\Routing\Controller;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	public function index()
	{
        $news = News::all()->sortByDesc('created_at');
        return View::make('admin.index')->with('news', $news);
	}

    // public function image() {
    //     return View::make('admin.image');
    // }

    public function imageUpload() {
    	$image = Input::file('file');
    	$imageName = str_replace(".".$image->getClientOriginalExtension(), "_".md5(rand(100, 200)), $image->getClientOriginalName());
    	$imageName = $imageName.".".$image->getClientOriginalExtension();
    	$image->move('assets/img/news',$imageName);

    	$url = asset('assets/img/news/'.$imageName);

    	return Response::json(['url' => $url]);
    }
}