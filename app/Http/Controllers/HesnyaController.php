<?php

namespace App\Http\Controllers;

use App\Models\Hesnya;
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
       return view('admin.hasyna.index');
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
