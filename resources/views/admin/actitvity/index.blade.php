@extends('layouts.admin')

@section('title', 'جميع الخدمات')


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
               <a type="button" class="btn btn-primary" href="{{ route('actitvity.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>إسم النشاط </th>
                      <th>الحالة</th>

                    <th>الإجراءات</th>
                  </tr>
                </thead>

                <tbody>
                  
                  @foreach($activities as $activity)
                    <tr>
                        <th>{{$activity->id}}</th>
                        <th>{{$activity->name}}</th>
                        <td>
                              @if($activity->status=='active')
                                  <span class="btn btn-success btn-sm">مفعل</span>
                              @elseif($activity->status=='draft')
                                  <span class="btn btn-danger btn-sm">غير مفعل</span>
                              @endif
                        </td>
                        <td>   
                              <a href="{{route('actitvity.edit' , $activity->id )}}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="{{route('actitvity.delete' , $activity->id )}}" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
               
                    <th>إسم النشاط </th>
                      <th>الحالة</th>

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