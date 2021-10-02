<?php

namespace App\Http\Controllers;

use App\Models\Meran;
use Illuminate\Http\Request;

class MeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $merans = Meran::where('user_id' , auth()->id())->all();
        return view('admin.meran.index',[
            'merans' => $merans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.meran.create',[
           'meran' => new Meran()
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

      $id_credit = Meran::where('user_id' , auth()->id())->pluck('total_credit')->last();
      $id_debt = Meran::where('user_id' , auth()->id())->pluck('total_debt')->last();
    //  dd($total_credit ,$total_debt );

        $total_debt = $id_debt + $request->partial_debt;
        $total_credit = $id_credit + $request->partial_debt;


        
        $meran = new Meran;
        $meran->statement = $request->statement;
        $meran->partial_credit = $request->partial_debt;
        $meran->partial_debt = $request->partial_debt;
        $meran->total_credit += $total_credit;
        $meran->total_debt += $total_debt;
        $meran->save();
        \Session::flash("msg", "s:تم إضافة الميران ($meran->statement) بنجاح");
        return redirect()->route('meran.index');
     //  dd('ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meran  $meran
     * @return \Illuminate\Http\Response
     */
    public function show(Meran $meran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meran  $meran
     * @return \Illuminate\Http\Response
     */
    public function edit(Meran $meran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meran  $meran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meran $meran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meran  $meran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meran $meran)
    {
        //
    }
}
