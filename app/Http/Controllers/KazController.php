<?php

namespace App\Http\Controllers;

use App\Models\Kaz;
use Illuminate\Http\Request;

class KazController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kaz.index',[
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
     * @param  \App\Models\Kaz  $kaz
     * @return \Illuminate\Http\Response
     */
    public function show(Kaz $kaz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kaz  $kaz
     * @return \Illuminate\Http\Response
     */
    public function edit(Kaz $kaz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kaz  $kaz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kaz $kaz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kaz  $kaz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kaz $kaz)
    {
        //
    }
}
