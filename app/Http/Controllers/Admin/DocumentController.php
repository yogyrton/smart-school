<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentCreateRequest;
use App\Http\Requests\DocumentUpdateRequest;
use App\Models\Admin\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();

        return view('admin.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentCreateRequest $request)
    {
        $docs = Document::query()->count();

        if ($docs < 5) {
            $file = $request->file('path')->store('documents','public');

            Document::query()->create([
                'title' => $request->title,
                'path' => $file,
            ]);

            return redirect()->route('documents.index')->with('success', 'Документ успешно добавлен');
        }

        return redirect()->route('documents.index')->with('error', 'Не может быть больше 5 документов');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $document = Document::query()->find($id);

        return view('admin.documents.edit', compact('id', 'document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentUpdateRequest $request, $id)
    {
        $request->validated();

        $document = Document::query()->find($id);

        $file = $request->hasFile('path') ? $request->file('path')->store('documents','public') : $document->path;

        $document->update([
            'title' => $request->title,
            'path' => $file,
        ]);

        return redirect()->route('documents.index')->with('success', 'Документ успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doc = Document::query()->find($id);
        $path = '/public/' . $doc->path;

        Storage::delete($path);
        Document::destroy($id);

        return redirect()->route('documents.index')->with('success', 'Документ удален');
    }

    public function download($id)
    {
        $doc = Document::query()->find($id);
        $path = public_path('storage/') . $doc->path;


        return response()->download($path);
    }
}
