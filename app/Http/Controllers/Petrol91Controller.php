<?php

namespace App\Http\Controllers;

use App\Models\Petrol91;
use Illuminate\Http\Request;

class Petrol91Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       $js = Petrol91::select('meter')->get();
       $petrol91s = Petrol91::all();
       $items = json_decode(($js[0]['meter']),true);
      // dd($items);
       return view('admin.91.index',[
        'petrol91s' => $petrol91s,
        'items' => $items

       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  //dd(20);
      return view('admin.91.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last = Petrol91::pluck('total')->last();
        $price = $request->price;
        $total = 
          $request->data[0]['meter1'] 
        + $request->data[0]['meter2'] 
        + $request->data[0]['meter3']
        + $request->data[0]['meter4']
        + $request->data[0]['meter5']
        + $request->data[0]['meter6'];
       
        $qty = $last - $total;
        $caliber = $request->caliber - $qty ;
        $clear = $caliber - $qty;
        $value = $clear * $price;
        $dataJson = json_encode($request->data);
      //  dd($dataJson);
        $petrol91 =Petrol91::create([
            'meter'        => $dataJson,
            'total'        => $total,
            'qty'          => $qty,
            'caliber'      => $caliber,
            'clear'        => $clear,
            'price'        => $price,
            'value'        => $value,
            'size'         => $request->size
        ]);         
        \Session::flash("msg", "s:تم إضافة المنتج ($petrol91->price) بنجاح");
        return redirect()->route('petrol91.index');
        
      //  dd($multiplied->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petrol91  $petrol91
     * @return \Illuminate\Http\Response
     */
    public function show(Petrol91 $petrol91)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petrol91  $petrol91
     * @return \Illuminate\Http\Response
     */
    public function edit(Petrol91 $petrol91)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petrol91  $petrol91
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petrol91 $petrol91)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petrol91  $petrol91
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petrol91 $petrol91)
    {
        //
    }
}
