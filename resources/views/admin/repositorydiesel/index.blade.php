@extends('layouts.admin')

@section('title' , 'مخزن ديزل')

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Products</li>
</ol>
@endsection

@section('content')
  @include('shared.msg')

  <div class="card">
 
              <div class="card-header">
                 <a type="button" class="btn btn-primary" href="{{ route('petrol91.create') }}">إضافة <i class="fa fa-plus"></i> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%">التاريخ</th>
                    <th>رصيد أول </th>
                    <th>المبيعات </th>
                    <th>الورد  </th>
                    <th> الرصيد</th>
                  </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach ($petrol91s as $petrol91)
                      <tr>
                          <td>{{$petrol91->total}}</td>
                          <td>{{$petrol91->qty}}</td>
                          <td>{{$petrol91->caliber}}</td>
                          <td>{{$petrol91->clear}}</td>
                          <td>{{$petrol91->value}}</td>
                          <td>{{$petrol91->size}}</td>
                      </tr> 
                    @endforeach --}}
                  </tbody>
                  <tfoot>
                  <tr>
                    <th width="10%">التاريخ</th>
                    <th>رصيد أول </th>
                    <th>المبيعات </th>
                    <th>الورد  </th>
                    <th> الرصيد</th>
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