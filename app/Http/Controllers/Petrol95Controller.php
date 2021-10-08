<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Illuminate\Http\Request;
use App\Models\MonthlyPrice;
use Carbon\Carbon;
use App\Models\Initial;

class Petrol95Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $response = Input::where('type', '=' , 'petrol95')
        ->where('user_id' , auth()->id())->get();
        $items = json_decode($response, true);
         return view('admin.95.index',[
            'items' => $items
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.95.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $last = Input::where('type', '=' , 'petrol95')->pluck('total')->last();
         $monthly = MonthlyPrice::first();
         //dd($monthly->price1_95);
         $current = Carbon::today();
         $current->toDateString();
         $current->day <= 10 ? $price = $monthly->price1_95 : $price = $monthly->price2_95;
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
       // dd($price);

        $dataJson = json_encode($request->data);
        $petrol95 =Input::create([
            'meter'        => $dataJson,
            'total'        => $total,
            'qty'          => $qty,
            'caliber'      => $request->caliber,
            'clear'        => $clear,
            'price'        => $price,
            'value'        => $end,
            'size'         => $request->size,
            'type'         =>'petrol95',
            'user_id'     => \Auth::id()
        ]);         
       \Session::flash("msg", "s:تم إضافة المنتج ($petrol95->price) بنجاح");
        return redirect()->route('petrol95.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petrol95  $petrol95
     * @return \Illuminate\Http\Response
     */
    public function show(Petrol95 $petrol95)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petrol95  $petrol95
     * @return \Illuminate\Http\Response
     */
    public function edit(Petrol95 $petrol95)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petrol95  $petrol95
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petrol95 $petrol95)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petrol95  $petrol95
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petrol95 $petrol95)
    {
        //
    }
}
