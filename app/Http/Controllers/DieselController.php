<?php

namespace App\Http\Controllers;

use App\Models\Diesel;
use Illuminate\Http\Request;

class DieselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.diesel.index',[
            // 'petrol91s' => $petrol91s,
            // 'items' => $items

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
