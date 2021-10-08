<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Illuminate\Http\Request;
use App\Models\MonthlyPrice;
use Carbon\Carbon;
use App\Models\Initial;
class DieselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $response = Input::where('type' , '=' , 'diesel')
        ->where('user_id' , auth()->id())->get();
        $items = json_decode($response, true);
        return view('admin.diesel.index',[
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
        return view('admin.diesel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $last = Input::where('type', '=' , 'diesel')->pluck('total')->last();
         $monthly = MonthlyPrice::first();
         $current = Carbon::today();
         $current->toDateString();
         $current->day <= 10 ? $price=$monthly->price1_diesel : $price = $monthly->price2_diesel;
         $total = $request->data[0]['meter1'] + $request->data[0]['meter2'] + $request->data[0]['meter3']+
         $request->data[0]['meter4'] + $request->data[0]['meter5'] + $request->data[0]['meter6'];
         //dd($last);
         $qty = $total - $last;
         //dd($total , $last);
         $cal = ($qty - $request->caliber);
        // dd($cal);
         $clear = $qty - $request->caliber;
        // dd($clear);
         $end = $clear * $price;
       // dd($end);

        $dataJson = json_encode($request->data);
        $diesel =Input::create([
            'meter'        => $dataJson,
            'total'        => $total,
            'qty'          => $qty,
            'caliber'      => $request->caliber,
            'clear'        => $clear,
            'price'        => $price,
            'value'        => $end,
            'size'         => $request->size,
            'type'         =>'diesel',
            'user_id'      => \Auth::id()
        ]);         
       \Session::flash("msg", "s:تم إضافة المنتج ($diesel->price) بنجاح");
        return redirect()->route('diesel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diesel  $diesel
     * @return \Illuminate\Http\Response
     */
    public function show(Diesel $diesel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diesel  $diesel
     * @return \Illuminate\Http\Response
     */
    public function edit(Diesel $diesel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diesel  $diesel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diesel $diesel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diesel  $diesel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diesel $diesel)
    {
        //
    }
}
