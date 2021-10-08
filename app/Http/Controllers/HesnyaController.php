<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Illuminate\Http\Request;

class HesnyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $response = Input::where('type', '=' , 'hesnya')
        ->where('user_id' , auth()->id())->get();
        $items = json_decode($response, true);
        return view('admin.hasyna.index',[
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last = Input::where('type', '=' , 'hesnya')->pluck('total')->last();
         $monthly = MonthlyPrice::first();
         $current = Carbon::today();
         $current->toDateString();
         $current->day <= 10 ? $price=$monthly->price1_kaz : $price = $monthly->price2_kaz;
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
        $kaz =Input::create([
            'meter'        => $dataJson,
            'total'        => $total,
            'qty'          => $qty,
            'caliber'      => $request->caliber,
            'clear'        => $clear,
            'price'        => $price,
            'value'        => $end,
            'size'         => $request->size,
            'type'         =>'hesnya',
            'user_id'      => \Auth::id()
        ]);         
       \Session::flash("msg", "s:تم إضافة المنتج ($kaz->price) بنجاح");
        return redirect()->route('kaz.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hesnya  $hesnya
     * @return \Illuminate\Http\Response
     */
    public function show(Hesnya $hesnya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hesnya  $hesnya
     * @return \Illuminate\Http\Response
     */
    public function edit(Hesnya $hesnya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hesnya  $hesnya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hesnya $hesnya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hesnya  $hesnya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hesnya $hesnya)
    {
        //
    }
}
