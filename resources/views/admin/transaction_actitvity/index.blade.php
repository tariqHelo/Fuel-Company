@extends('layouts.admin')

@section('title', 'جميع حركات الإنشطة')


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
               <a type="button" class="btn btn-primary" href="{{ route('transaction_actitvity.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>التاريخ</th>
                  <th>إسم النشاط</th>
                  <th>المبلغ</th>
                  {{-- <th>الإجمالي</th> --}}
                  <th>ملاحظات </th>
                  {{-- <th>الحالة</th> --}}
                  <th>الإجراءات</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($transactitvity as $tranaction)
                    <tr>
                        <th>{{$tranaction->created_at->format('d-m-Y')}}</th>
                        <th>{{$tranaction->actitvity->name }}</th>
                        <th>{{$tranaction->price	}}</th>
                         <th>{{$tranaction->note}}</th>
                        <td>   
                              <a href="" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                  <th>التاريخ</th>
                  <th>الإجمالي</th>
                  <th>{{DB::table("transaction_actitvities")->where('user_id' , auth()->id())->sum("price")}}</th>
                  {{-- <th>الإجمالي</th> --}}
                  <th>ملاحظات </th>
                  {{-- <th>الحالة</th> --}}
                  <th>الإجراءات</th>

                  </tr>
                </tfoot>
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


