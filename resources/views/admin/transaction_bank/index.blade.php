@extends('layouts.admin')

@section('title', 'جميع حركات البنوك')


@section('breadcrumb')
{{-- <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">car</li>
</ol> --}}
@endsection

@section('content')
        @include('shared.msg')

          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('transaction_bank.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>إسم البنك</th>
                     <th>السعر </th>
                    <th>الإجمالي</th>
                  </tr>
                </thead>
                @foreach ($transactionbanks as $day => $transactionbank)
                
                    <tr>
                        <th colspan="3"><strong>{{ $day }}: ({{ $transactionbank->count() }}) مجموع الحركات<strong></th>
                        <th><strong> ({{DB::table("transaction_banks")->get()->sum("price")}}) المبلغ الإجمالي<strong></th>
                    </tr>
                    @foreach ($transactionbank as $transactin)
                        <tr>
                           <td>{{ $transactin->id}}</td>
                            <td>{{ $transactin->bank->name }}</td>
                            <td>{{ $transactin->price }}</td>
                            <td>{{ $transactin->total }}</td>
                            {{-- <td>   
                              <a href="" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td> --}}
                        </tr>
                         
                    @endforeach
                @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection