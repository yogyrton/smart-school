<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherCreateRequest;
use App\Http\Requests\TeacherUpdateRequest;
use App\Models\Admin\Teacher;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::query()->orderBy('point')->get();

        return view('admin.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherCreateRequest $request)
    {
        $file = $request->file('thumbnail')->store('img/teachers', 'public');

        Teacher::query()->create([
            'name' => $request->name,
            'position' => $request->position,
            'category' => $request->category,
            'experience' => $request->experience,
            'thumbnail' => $file,
            'point' => $request->point
        ]);

        return redirect()->route('teacher.index')->with('success', 'Данные о педагоге успешно добавлены');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teacher = Teacher::query()->findOrFail($id);

        return view('admin.teacher.edit', compact('teacher', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherUpdateRequest $request, $id)
    {

        $teacher = Teacher::query()->find($id);

        $file = $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('img/teachers', 'public') : $teacher->thumbnail;

        $teacher->update([
            'name' => $request->name,
            'position' => $request->position,
            'category' => $request->category,
            'experience' => $request->experience,
            'thumbnail' => $file,
            'point' => $request->point
        ]);

        return redirect()->route('teacher.index')->with('success', 'данные педагога изменены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teacher = Teacher::query()->find($id);
        $path = '/public/' . $teacher->thumbnail;

        Storage::delete($path);

        Teacher::destroy($id);

        return redirect()->route('teacher.index')->with('success', 'Данные о педагоге удалены');
    }
}
