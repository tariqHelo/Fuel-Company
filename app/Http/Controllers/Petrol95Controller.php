<?php

namespace App\Http\Controllers;

use App\Models\Petrol95;
use Illuminate\Http\Request;

class Petrol95Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.95.index',[
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
