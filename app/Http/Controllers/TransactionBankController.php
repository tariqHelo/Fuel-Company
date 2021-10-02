<?php

namespace App\Http\Controllers;

use App\Models\TransactionBank;
use Illuminate\Http\Request;
use App\Models\Bank;
use Illuminate\Support\Facades\DB;

class TransactionBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        $total = TransactionBank::orderBy('created_at')->sum('total');
        //dd($total);
         $transactionbanks = TransactionBank::orderBy('created_at')->get()->groupBy(function($data) {
                $data->created_at->format('Y-m-d');
        });
       // dd($transactionbanks);
        $banks = Bank::all();
     //   dd($transactionbanks);
        return view('admin.transaction_bank.index',[
          'banks' => $banks,
          'transactionbanks' => $transactionbanks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
      $banks = Bank::where('user_id' , auth()->id())->where('status' ,'=', 'active')->pluck('name' , 'id');
       return view('admin.transaction_bank.create',[
          'banks' => $banks,
          'transactionbanks' => new TransactionBank()
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
       // $total = TransactionBank::pluck('total')->last();
        //TransactionBank::where('total')->increment("total",$request->price);
       // dd($total);
         $transactionbank = TransactionBank::create([
             'price' => $request->price,
             'bank_id' => $request->bank_id,
              'total' => $total,
             'note' => $request->note,
             'user_id' => \Auth::id(),
         ]);
         \Session::flash("msg", "s:تم إضافة العملية ($transactionbank->price) بنجاح");
         return redirect()->route('transaction_bank.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransactionBank  $transactionBank
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionBank $transactionBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionBank  $transactionBank
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionBank $transactionBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransactionBank  $transactionBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransactionBank $transactionBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionBank  $transactionBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionBank $transactionBank)
    {
        //
    }
}
