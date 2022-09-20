<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoCreateRequest;
use App\Http\Requests\PhotoUpdateRequest;
use App\Models\Admin\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::query()->orderBy('camp')->get();

        return view('admin.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhotoCreateRequest $request)
    {
        $file = $request->file('thumbnail')->store('img/photos', 'public');

        Photo::query()->create([
           'camp' => $request->camp,
           'thumbnail' => $file,
        ]);

        return redirect()->route('photos.index')->with('success', 'Фото успешно добавлено');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $photo = Photo::query()->find($id);

        return view('admin.photos.edit', compact('id', 'photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PhotoUpdateRequest $request, $id)
    {
        $photo = Photo::query()->find($id);

        $file = $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('img/photos', 'public') : $photo->thumbnail;

        $photo->update([
            'camp' => $request->camp,
            'thumbnail' => $file,
        ]);

        return redirect()->route('photos.index')->with('success', 'Фото успешно изменено');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $photo = Photo::query()->find($id);
        $path = '/public/' . $photo->thumbnail;

        Storage::delete($path);

        Photo::destroy($id);

        return redirect()->route('photos.index')->with('success', 'Фото успешно удалено');
    }
}
