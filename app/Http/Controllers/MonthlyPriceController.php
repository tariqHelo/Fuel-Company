<?php

namespace App\Http\Controllers;

use App\Models\MonthlyPrice;
use Illuminate\Http\Request;

class MonthlyPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.monthly.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $monthly = MonthlyPrice::where('user_id' , auth()->id())->first();
      //dd($settings);
        if ($monthly) {
            $monthly->update($request->all());
             \Session::flash("msg", "s:تم تعديل القيمة بنجاح");
            return redirect()->back();
        } else {
             MonthlyPrice::create([
             'price1' => $request->price1,
             'price2' => $request->price2,
             'user_id' => \Auth::id()
             ]);
             \Session::flash("msg", "s:تم إضافة القيمة بنجاح");
             return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MonthlyPrice  $monthlyPrice
     * @return \Illuminate\Http\Response
     */
    public function show(MonthlyPrice $monthlyPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonthlyPrice  $monthlyPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(MonthlyPrice $monthlyPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MonthlyPrice  $monthlyPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MonthlyPrice $monthlyPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MonthlyPrice  $monthlyPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(MonthlyPrice $monthlyPrice)
    {
        //
    }
}
