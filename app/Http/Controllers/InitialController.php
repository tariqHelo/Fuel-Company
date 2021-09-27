<?php

namespace App\Http\Controllers;

use App\Models\Initial;
use Illuminate\Http\Request;

class InitialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  return view('admin.settings.inital.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $settings = Initial::first();
        return view('admin.settings.inital.create',[
          'settings'=> $settings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
     // dd($request->all());
      $settings = Initial::first();
      //dd($settings);
        if ($settings) {
            $settings->update($request->all());
             \Session::flash("msg", "s:تم تعديل القيمة المبدئية بنجاح");
            return redirect()->back();
        } else {
             Initial::create([
             'number_initial' => $request->number_initial,
             'user_id' => \Auth::id()
             ]);
             \Session::flash("msg", "s:تم إضافة القيمة المبدئية بنجاح");
             return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Initial  $initial
     * @return \Illuminate\Http\Response
     */
    public function show(Initial $initial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Initial  $initial
     * @return \Illuminate\Http\Response
     */
    public function edit(Initial $initial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Initial  $initial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Initial $initial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Initial  $initial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Initial $initial)
    {
        //
    }
}
