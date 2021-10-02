<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $banks = Bank::where('user_id' , auth()->id())->all();
        return view('admin.bank.index',[
            'banks' => $banks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.bank.create',[
           'bank' => new bank(),
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
       $bank = Bank::create([
          'name' => $request->name,
          'status' => $request->status,
          'user_id' => \Auth::id()
       ]);
       \Session::flash("msg", "s:تم إضافة البنك ($bank->name) بنجاح");
       return redirect()->route('banks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {   
       // $bank = Bank::find($bank)
        return view('admin.bank.edit',[
          'bank' => $bank,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        $bank->update($request->all());
        \Session::flash("msg", "s:تم تعديل البنك ($bank->name) بنجاح");
        return redirect()->route('banks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $bank = Bank::find($id);
        $bank->delete();
        \Session::flash("msg", "w:تم حذف البنك($bank->name)بنجاح");
        return redirect()->route('banks.index');

    }
}
