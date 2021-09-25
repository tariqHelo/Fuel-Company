@extends('layouts.admin')

@section('title', 'الميران')


@section('breadcrumb')
{{-- <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">car</li>
</ol> --}}
@endsection
    

@section('content')
<div class="col-md-6">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>دائن كلي</th>
        <th>مدين كلي</th>
      </tr>
    </thead>
    <tbody>
        @foreach($merans as $meran)
          <tr>
            <td>1.</td>
            <td>{{$meran->total_credit}}</td>
            <td><span class="badge bg-danger">{{$meran->total_debt}}</span></td>
          </tr>
        @endforeach  
    </tbody>
  </table>
</div>
<!-- /.card-body -->
        @include('shared.msg')

          <div class="card">
            
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('meran.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>البيان </th>
                    <th>دائن جزئي</th>
                    {{-- <th>دائن كلي </th> --}}
                    <th>مدين جزئي </th>
                    {{-- <th>مدين كلي </th> --}}
                    <th>الإجراءات </th>
                  </tr>
                </thead>

                <tbody>
                  
                  @foreach($merans as $meran)
                    <tr>
                        <th>{{$meran->id}}</th>
                        <th>{{$meran->statement}}</th>
                         <th>{{$meran->partial_credit}}</th>
                        {{-- <th>{{$meran->total_credit}}</th> --}}
                         <th>{{$meran->partial_debt}}</th>
                        {{-- <th>{{$meran->total_debt}}</th> --}}
                        <td>   
                              <a href="{{route('meran.edit' , $meran->id )}}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>البيان </th>
                    <th>دائن جزئي</th>
                    {{-- <th>دائن كلي </th> --}}
                    <th>مدين جزئي </th>
                    {{-- <th>مدين كلي </th> --}}
                    <th>الإجراءات </th>
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