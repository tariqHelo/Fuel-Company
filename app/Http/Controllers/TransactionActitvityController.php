<?php

namespace App\Http\Controllers;

use App\Models\TransactionActitvity;
use Illuminate\Http\Request;
use App\Models\Activities;

class TransactionActitvityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $transactitvity = TransactionActitvity::where('user_id' , auth()->id())->with('actitvity')->get();
      // dd($transactitvity);
        return view('admin.transaction_actitvity.index',[
            'transactitvity' => $transactitvity
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activities::where('user_id' , auth()->id())->where('status' ,'=', 'active')->pluck('name' , 'id');
        return view('admin.transaction_actitvity.create',[
          'activities' => $activities,
          'transactitvity' => new TransactionActitvity()
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
        
        // dd($request->all());
        
         $transactitvity = TransactionActitvity::create([
             'price' => $request->price,
             'actitvity_id ' => $request->actitvity_id,
            //  'total' => $request->total,
             'note ' => $request->note,
             'user_id' => \Auth::id(),
         ]);
         \Session::flash("msg", "s:تم إضافة العملية ($transactitvity->price) بنجاح");
         return redirect()->route('transaction_bank.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransactionActitvity  $transactionActitvity
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionActitvity $transactionActitvity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionActitvity  $transactionActitvity
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionActitvity $transactionActitvity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransactionActitvity  $transactionActitvity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransactionActitvity $transactionActitvity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionActitvity  $transactionActitvity
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionActitvity $transactionActitvity)
    {
        //
    }
}
