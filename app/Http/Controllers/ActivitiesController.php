<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  // dd(20);
        $activities = Activities::where('user_id' , auth()->id())->all();
        return view('admin.actitvity.index',[
            'activities' => $activities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.actitvity.create',[
           'actitvity' => new Activities(),
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   dd($request->all());
        // $total = $request->pincher + $request->grocery +
        // $request->washing + $request->flat + $request->room ;
        $actitvity = Activities::create([
            'name' => $request->name,
            'status' => $request->status,
            'user_id' => \Auth::id()

        ]);
        \Session::flash("msg", "s:تم إضافة النشاط  بنجاح");
        return redirect()->route('actitvity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show(Activities $activities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       $actitvity = Activities::find($id);
        return view('admin.actitvity.edit',[
        'actitvity' => $actitvity,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $actitvity = Activities::find($id);
        $actitvity->update($request->all());
        \Session::flash("msg", "s:تم تعديل النشاط ($actitvity->name) بنجاح");
        return redirect()->route('actitvity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $actitvity = Bank::find($id);
       $actitvity->delete();
       \Session::flash("msg", "w:تم حذف النشاط($actitvity->name)بنجاح");
       return redirect()->route('actitvity.index');
    }
}
