<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Carbon;
use App\Shoe;
use App\Brand;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $brand = Brand::all();
        $shoes =  Shoe::all();

        return view('shoes.index')
            ->with('shoe', $shoes)
            ->with('brand', $brand);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function create()
    {
        $size = DB::table('shoe_size')->get()->pluck('shoe_size',	'id');
        $brand = DB::table('shoe_brand')->get()->pluck('brand_name',	'id');
        return view('shoes.create')
            ->with('brand', $brand)
            ->with('size', $size);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function store(Request $request)
    {
        $shoe = new Shoe;

        $shoe->shoe_name = $request->input('shoe_name');
        $shoe->shoe_brand_FK = $request->input('shoe_brand');
        $shoe->shoe_size_FK = $request->input('shoe_size');
        $shoe->shoe_description = $request->input('shoe_description');
        $shoe->shoe_amount = $request->input('shoe_amount');

        $shoe->save();

        return redirect()->route('shoes.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
        return view('shoes.show',compact('shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
            ->with('success','Product removed successfully.');
    }
}
