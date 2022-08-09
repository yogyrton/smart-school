<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinksCreateRequest;
use App\Http\Requests\LinksUpdateRequest;
use App\Models\Admin\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = Link::all();

        return view('admin.links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LinksCreateRequest $request)
    {
        $count = Link::query()->where('camp', '=', $request->camp)->count();

        if ($count < 1) {
            Link::query()->create($request->all());

            return redirect()->route('links.index')->with('success', 'Ссылка добавлена');
        }
        return redirect()->route('links.index')->with('error', "Уже есть ссылка на странице: $request->camp" );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $link = Link::query()->find($id);

        return view('admin.links.edit', compact('link', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LinksCreateRequest $request, $id)
    {
        $link = Link::query()->find($id);
        $linkCamp = $link->camp;
        $count = Link::query()->where('camp', '=', $request->camp)->count();

        if ($count < 1 || ($count == 1 && $linkCamp == $request->camp)) {
            $link->update($request->all());

            return redirect()->route('links.index')->with('success', 'Ссылка изменена');
        }
        return redirect()->route('links.index')->with('error', "Уже есть ссылка на странице: $request->camp" );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Link::destroy($id);

        return redirect()->route('links.index')->with('success', 'Ссылка удалена');
    }
}
