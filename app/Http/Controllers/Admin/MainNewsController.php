<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainNewsRequest;
use App\Models\Admin\MainNews;

class MainNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $news = MainNews::query()->orderBy('page')->get();

        return view('admin.main_news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.main_news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(MainNewsRequest $request)
    {
        $count = MainNews::query()->where('page', '=', $request->page)->count();
        if ($count < 3) {
            MainNews::query()->create($request->all());
            return redirect()->route('main_news.index')->with('success', 'Главная новость добавлена');
        }
        return redirect()->route('main_news.index')->with('error', "Уже 3 главные новости на странице: $request->page" );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news = MainNews::query()->findOrFail($id);

        return view('admin.main_news.edit', compact('news', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MainNewsRequest $request, $id)
    {
        $news = MainNews::query()->find($id);
        $newsCamp = $news->page;
        $count = MainNews::query()->where('page', '=', $request->page)->count();

        if ($count < 3 || ($count == 3 && $newsCamp == $request->page)) {
            $news->update($request->all());

            return redirect()->route('main_news.index')->with('success', 'Главная новость изменена');
        }
        return redirect()->route('main_news.index')->with('error', "Уже 3 главные новости на странице: $request->page");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MainNews::destroy($id);

        return redirect()->route('main_news.index')->with('success', 'Главная новость удалена');
    }
}
