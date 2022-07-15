<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleriesCreateRequest;
use App\Http\Requests\GalleriesUpdateRequest;
use App\Models\Admin\Gallery;
use Illuminate\Http\Request;
use Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();

        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleriesCreateRequest $request)
    {
        $count = Gallery::query()->count();

        if ($count < 10) {
            $file = $request->file('thumbnail')->store('img/galleries', 'public');

            Gallery::query()->create([
                'thumbnail' => $file,
            ]);

            return redirect()->route('galleries.index')->with('success', 'Фото успешно добавлено');
        }

        return redirect()->route('galleries.index')->with('error', 'Не может быть больше 10 фото');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.gallery.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleriesUpdateRequest $request, $id)
    {
        $gallery = Gallery::query()->find($id);

        $file = $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('img/galleries', 'public') : $gallery->thumbnail;

        $gallery->update([
           'thumbnail' => $file
        ]);

        return redirect()->route('galleries.index')->with('success', 'Фото успешно изменено');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::query()->find($id);
        $path = '/public/' . $gallery->thumbnail;

        Storage::delete($path);

        Gallery::destroy($id);

        return redirect()->route('galleries.index')->with('success', 'Фото успешно удалено');
    }
}
