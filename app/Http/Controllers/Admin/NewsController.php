<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\Admin\News;
use App\Models\Admin\Teacher;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::query()->orderByDesc('created_at')->get();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $file = $request->file('thumbnail')->store('img/news', 'public');

        News::query()->create([
            'title' => $request->title,
            'text' => $request->text,
            'thumbnail' => $file,
        ]);

        return redirect()->route('news.index')->with('success', 'Новость успешно добавлена');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news = News::query()->find($id);

        return view('admin.news.edit', compact('id', 'news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsUpdateRequest $request, $id)
    {

        $news = News::query()->find($id);

        $file = $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('img/teachers', 'public') : $news->thumbnail;

        $news->update([
            'title' => $request->title,
            'text' => $request->text,
            'thumbnail' => $file,
        ]);

        return redirect()->route('news.index')->with('success', 'Новость успешно отредактирована');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        News::destroy($id);

        return redirect()->route('news.index')->with('success', 'Новость удалена');
    }
}
