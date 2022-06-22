<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CounselorRequest;
use App\Models\Admin\Counselor;
use Illuminate\Http\Request;

class CounselorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counselors = Counselor::all();

        return view('admin.counselor.index', compact('counselors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.counselor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CounselorRequest $request)
    {
        $file = $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('img/counselor', 'public') : '';

        Counselor::query()->create([
           'name' => $request->name,
           'thumbnail' => $file,
           'camp' => $request->camp,
        ]);

        return redirect()->route('counselor.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $counselor = Counselor::query()->find($id);

        return view('admin.counselor.edit', compact('id', 'counselor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CounselorRequest $request, $id)
    {
        $counselor = Counselor::query()->find($id);
        $file = $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('img/counselor', 'public') : $counselor->thumbnail;

        $counselor->update([
            'name' => $request->name,
            'thumbnail' => $file,
            'camp' => $request->camp,
        ]);

        return redirect()->route('counselor.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Counselor::destroy($id);

        return redirect()->route('counselor.index');
    }
}
