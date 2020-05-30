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

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
       // $shoes = DB::table('shoes')->get();
       // return view('shoes.index')
          //  ->with('shoes', $shoes);

        $shoes = Shoe::latest()->paginate(5);

        return view('shoes.index',compact('shoes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $size = DB::table('shoe_size')->get()->pluck('shoe_size',	'shoe_size_ID');
        $brand = DB::table('shoe_brand')->get()->pluck('shoe_brand',	'shoe_brand_ID');
        return view('shoes.create')
            ->with('brand', $brand)
            ->with('size', $size);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function store(Request $request)
    {
        DB::table('shoes')->insert([
            'shoes_ID' => Uuid::generate(),
            'shoe_name' => $request->input('shoe_name'),
            'shoe_brand_FK' => $request->input('shoe_brand'),
            'shoe_size_FK' => $request->input('shoe_size'),
            'shoe_description' => $request->input('shoe_description'),
            'shoe_amount' => $request->input('shoe_amount'),
            'created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
            'updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
        ]);
        return redirect()->route('shoes.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
