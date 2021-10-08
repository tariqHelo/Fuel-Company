<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Diesel;
use App\Models\Kaz;
use App\Models\Petrol95;

use App\Models\Petrol91;

use Illuminate\Http\Request;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
    //    $data = Petrol91::join('petrol91s', 'petrol91s.id', '=', 'value.user_id')
    //    ->get(['petrol91s.*']);
       //dd($data);
        /*Above code will produce following query

        Select
        `country`.`country_name`,
        `state`.`state_name`,
        `city`.`city_name`
        from `country`
        inner join `state`
        on `state`.`country_id` = `country`.`country_id`
        inner join `city`
        on `city`.`state_id` = `state`.`state_id`

        */
        $res1 = Petrol91::select('value')->get()->toArray();
        
      // dd($res1);
        return view('admin.box.index',[
           'res1' => $res1,
        //   'res2' => $res2,
        //   'res3' => $res3,
        //   'res4' => $res4
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function show(Box $box)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function edit(Box $box)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Box $box)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function destroy(Box $box)
    {
        //
    }
}
