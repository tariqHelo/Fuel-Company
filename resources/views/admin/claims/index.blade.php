@extends('layouts.admin')

@section('title' , 'بيان المبيعات الآجلة لشهر')

@section('breadcrumb')

@endsection

@section('content')
  @include('shared.msg')

  <div class="card">
 
              <div class="card-header">
                 <a type="button" class="btn btn-primary" href="{{ route('claims.create') }}">إضافة <i class="fa fa-plus"></i> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%">#</th>
                    <th>إسم الجهة  </th>
                    <th>المبلغ</th>
                    <th>ملاحظات </th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($claims as $claim)
                     <tr>
                        <td>{{$claim->id}}</td>
                        <td>{{$claim->name}}</td>
                        <td>{{$claim->total}}</td>
                        <td>{{$claim->note}}</td>
                    </tr> 
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th width="10%">#</th>
                    <th>الإجمالي  </th>
                    <th>{{DB::table("claims")->get()->sum("total")}} </th>
                     <th>ملاحظات </th>
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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection