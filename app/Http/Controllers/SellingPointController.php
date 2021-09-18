<?php

namespace App\Http\Controllers;

use App\Models\SellingPoint;
use Illuminate\Http\Request;

class SellingPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $sellingpoints = SellingPoint::all();
            return view('admin.selling_points.index',[
                'sellingpoints' => $sellingpoints
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.selling_points.create',[
          'sellingpoints' =>new SellingPoint()
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
         $sellingpoint = SellingPoint::create($request->all());
         \Session::flash("msg", "s:تم إضافة نقطة البيع ($sellingpoint->name) بنجاح");
         return redirect()->route('sellingpoints.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellingPoint  $sellingPoint
     * @return \Illuminate\Http\Response
     */
    public function show(SellingPoint $sellingPoint)
    {
        $sellingpoint = SellingPoint::create($request->all());
        \Session::flash("msg", "s:تم إضافة نقطة البيع ($sellingpoint->name) بنجاح");
        return redirect()->route('sellingpoint.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellingPoint  $sellingPoint
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $sellingpoints = SellingPoint::find($id);
       return view('admin.selling_points.create',[
        'sellingpoints' => $sellingpoints   
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SellingPoint  $sellingPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    
      //  dd($request->all());
         $sellingpoint = SellingPoint::find($id);
         $sellingpoint->update($request->all());
         \Session::flash("msg", "s:تم تعديل نقطة البيع ($sellingpoint->name) بنجاح");
         return redirect()->route('sellingpoint.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellingPoint  $sellingPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sellingpoint = SellingPoint::find($id);
        $sellingpoint->delete();
        \Session::flash("msg", "w:تم حذف نقطة البيع($sellingpoint->name)بنجاح");
        return redirect()->route('sellingpoints.index');
    }
}
