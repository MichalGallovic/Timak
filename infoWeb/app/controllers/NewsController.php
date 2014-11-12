<?php

use Illuminate\Routing\Controller;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /news
	 *
	 * @return Response
	 */
	public function index()
	{
        $news = News::all()->sortByDesc('created_at');
		return View::make('news.index')->with('news',$news);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /news/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /news
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
		$newsitem = new News();
        $newsitem->title = $input['title'];
        $newsitem->author = currentUserFullname();
        $newsitem->body = $input['body'];
        $newsitem->theme = $input['theme'];

        $newsitem->save();

        Session::flash('message','Novinka bola pridaná');

        return Redirect::route('admin');
	}

	/**
	 * Display the specified resource.
	 * GET /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $newsitem = News::find($id);
        return View::make('news.show')->with(['item' => $newsitem]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /news/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $item = News::find($id);

        return View::make('news.edit')->with('item',$item);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $input = Input::all();
        $newsitem = News::find($id);
        $newsitem->title = $input['title'];
        $newsitem->body = $input['body'];
        $newsitem->theme = $input['theme'];
        $newsitem->save();

        Session::flash('message','Novinka bola úspešne upravená');
        return Redirect::route('admin');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$newsitem = News::find($id);
        $newsitem->delete();
        Session::flash('message','Novinka vymazaná úspešne');
        return Redirect::route('admin');
	}

}