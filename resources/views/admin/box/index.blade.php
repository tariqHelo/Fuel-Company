@extends('layouts.admin')

@section('title' , 'بنزين 91')

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
                 <a type="button" class="btn btn-primary" href="{{ route('box.create') }}">إضافة <i class="fa fa-plus"></i> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%">التاريخ</th>
                    <th>91 </th>
                    <th>95 </th>
                    <th>ديزل </th>
                    <th>كاز </th>
                    <th>الحصينة </th>
                    <th>إجمالي مبيعات </th>
                    <th>مبيعات أجلة</th>
                    <th>صافي النقدية </th>
                    <th> الإنشطة</th>
                    <th>صافي </th>
                    {{-- <th>السعر</th> --}}
                    <th>القيمة </th>
                    <th>المقاس</th>
                  </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach ($items as $item)
                     <tr>
                  
                    </tr> 
                    @endforeach --}}
                  </tbody>
                  <tfoot>
                  <tr>
                    <th width="10%">التاريخ</th>
                    <th>91 </th>
                    <th>95 </th>
                    <th>ديزل </th>
                    <th>كاز </th>
                    <th>الحصينة </th>
                    <th>إجمالي مبيعات </th>
                    <th>مبيعات أجلة</th>
                    <th>صافي النقدية </th>
                    <th> الإنشطة</th>
                    <th>صافي </th>
                    {{-- <th>السعر</th> --}}
                    <th>القيمة </th>
                    <th>المقاس</th>
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