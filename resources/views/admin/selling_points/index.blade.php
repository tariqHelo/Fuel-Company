@extends('layouts.admin')

@section('title', 'جميع نقاط البيع')


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
               <a type="button" class="btn btn-primary" href="{{ route('sellingpoints.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>#</th>
                  <th>التاريخ</th>
                  <th>الموازنة الإولي</th>
                  <th>الموازنة الثانية</th>

                  {{-- <th>الحالة</th> --}}
                  <th>الإجراءات</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($sellingpoints as $sellingpoint)
                    <tr>
                        <th>{{$sellingpoint->id}}</th>
                        <th>{{$sellingpoint->created_at->format('d-m-Y')}}</th>
                        <th>{{$sellingpoint->price1}}</th>
                         <th>{{$sellingpoint->price2}}</th>
                         <th>{{$sellingpoint->total}}</th>
                        {{-- <td>
                              @if($sellingpoint->status=='active')
                                  <span class="btn btn-success btn-sm">مفعل</span>
                              @elseif($sellingpoint->status=='draft')
                                  <span class="btn btn-danger btn-sm">غير مفعل</span>
                              @endif
                          </td> --}}
                        <td>   
                              <a href="{{route('sellingpoints.edit' , $sellingpoint->id )}}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="{{route('sellingpoints.delete' , $sellingpoint->id )}}" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                   <th>#</th>
                  <th>التاريخ</th>
                  <th>الموازنة الإولي</th>
                  <th>الموازنة الثانية</th>

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