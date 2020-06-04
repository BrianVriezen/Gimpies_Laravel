<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Shoe;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $shoes = Shoe::with('brand')->get();

        return view('shoes.index')
            ->with('shoes', $shoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $size = DB::table('sizes')->get()->pluck('size', 'id');
        $brand = Brand::all('name', 'id');
        return view('shoes.create')
            ->with('brand', $brand)
            ->with('size', $size);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(Request $request)
    {
        $shoe = new Shoe;

        $shoe->name = $request->input('shoe_name');
        $shoe->brand()->associate($request->input('shoe_brand'));
        $shoe->size_id = $request->input('shoe_size');
        $shoe->description = $request->input('shoe_description');
        $shoe->amount = $request->input('shoe_amount');

        $shoe->save();

        return redirect()->route('shoes.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
        return view('shoes.show', compact('shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Shoe $shoe
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function destroy(Shoe $shoe)
    {
        $shoe->delete();

        return redirect()->route('shoes.index')
            ->with('success', 'Product removed successfully.');
    }
}
