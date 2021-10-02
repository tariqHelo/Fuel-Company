<?php

namespace App\Http\Controllers;

use App\Models\Petrol91;
use Illuminate\Http\Request;
use App\Models\MonthlyPrice;
use Carbon\Carbon;
use App\Models\Initial;

class Petrol91Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
      // dd(20);
       $response = Petrol91::where('user_id' , auth()->id())->get();
       $items = json_decode($response, true);
       return view('admin.91.index',[
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

         $settings = Initial::first();
         $settings ? $last = $settings->number_initial : $last = Petrol91::pluck('total')->last();
         $monthly = MonthlyPrice::first();
         $current = Carbon::today();
         $current->toDateString();
         $current->day <= 10 ? $price = $monthly->price1 : $price = $monthly->price2;
         $total = $request->data[0]['meter1'] + $request->data[0]['meter2'] + $request->data[0]['meter3']+
         $request->data[0]['meter4'] + $request->data[0]['meter5'] + $request->data[0]['meter6'];
         //dd($price);
         $qty = $total - $last;
         //dd($qty);
         $cal = ($qty - $request->caliber);
        // dd($cal);
         $clear = $qty - $request->caliber;
        // dd($clear);
         $end = $clear * $price;
       // dd($end);

        $dataJson = json_encode($request->data);
        $petrol91 =Petrol91::create([
            'meter'        => $dataJson,
            'total'        => $total,
            'qty'          => $qty,
            'caliber'      => $request->caliber,
            'clear'        => $clear,
            'price'        => $price,
            'value'        => $end,
            'size'         => $request->size,
            'user_id'     => \Auth::id()
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
//  $current = Carbon::today();
//  $current->toDateString();
//  // dd($current->day);
//  if($current->day <= 10){ dd('yes'); }else{ dd('no'); }
