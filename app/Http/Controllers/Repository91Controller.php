<?php

namespace App\Http\Controllers;

use App\Models\Repository91;
use Illuminate\Http\Request;

class Repository91Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.repository91.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.repository91.create');
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
     * @param  \App\Models\Repository91  $repository91
     * @return \Illuminate\Http\Response
     */
    public function show(Repository91 $repository91)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repository91  $repository91
     * @return \Illuminate\Http\Response
     */
    public function edit(Repository91 $repository91)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repository91  $repository91
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repository91 $repository91)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repository91  $repository91
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repository91 $repository91)
    {
        //
    }
}
