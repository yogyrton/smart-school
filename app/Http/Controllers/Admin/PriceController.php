<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriceRequest;
use App\Models\Admin\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Price::all();

        return view('admin.prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PriceRequest $request)
    {
        $request->validated();

        $news = Price::query()->count();
        if ($news < 1) {
            Price::query()->create($request->all());
            return redirect()->route('prices.index')->with('success', 'Прайс добавлен');
        }
        return redirect()->route('prices.index')->with('error', 'Уже есть прайс');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $price = Price::query()->find($id);

        return view('admin.prices.edit', compact('id', 'price'));
    }

    /**
     * Update the specified resource in storage.

     */
    public function update(PriceRequest $request, $id)
    {
        $price = Price::query()->find($id);

        $price->update($request->all());

        return redirect()->route('prices.index')->with('success', 'Прайс успешно изменен');
    }
}
