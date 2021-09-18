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
                 <a type="button" class="btn btn-primary" href="{{ route('petrol91.create') }}">إضافة <i class="fa fa-plus"></i> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%">التاريخ</th>
                    <th>عداد1 </th>
                    <th>عداد2 </th>
                    <th>عداد3 </th>
                    <th>عداد4 </th>
                    <th>عداد5 </th>
                    <th>عداد6 </th>
                    <th>إجمالي</th>
                    <th>الكمية </th>
                    <th> عيار</th>
                    <th>صافي </th>
                    {{-- <th>السعر</th> --}}
                    <th>القيمة </th>
                    <th>المقاس</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($petrol91s as $petrol91)
                     <tr>
                        <td>{{$petrol91->created_at->format('d-m-Y')}}</td>
                        {{-- {{dd($items)}} --}}
                         @if(isset($items))
                            @foreach($items as $i => $obj)
                                <td>{{ $obj['meter1'] }}</td>
                                <td>{{ $obj['meter2'] }}</td>
                                <td>{{ $obj['meter3'] }}</td>
                                <td>{{ $obj['meter4'] }}</td>
                                <td>{{ $obj['meter5'] }}</td>
                                <td>{{ $obj['meter6'] }}</td>
                            @endforeach
                        @endif
                        <td>{{$petrol91->total}}</td>
                        <td>{{$petrol91->qty}}</td>
                        <td>{{$petrol91->caliber}}</td>
                        <td>{{$petrol91->clear}}</td>
                        {{-- <td>{{$petrol91->price}}</td> --}}
                        <td>{{$petrol91->value}}</td>
                        <td>{{$petrol91->size}}</td>

                        {{-- <td>
                            @if($product->status=='active')
                                <span class="btn btn-success btn-sm">مفعل</span>
                            @elseif($product->status=='draft')
                                <span class="btn btn-danger btn-sm">غير مفعل</span>
                            @endif
                            </td>
                            <td>   
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                                <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td> --}}
                    </tr> 
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th width="10%">التاريخ</th>
                    <th>عداد1 </th>
                    <th>عداد2 </th>
                    <th>عداد3 </th>
                    <th>عداد4 </th>
                    <th>عداد5 </th>
                    <th>عداد6 </th>
                    <th> إجمالي</th>
                    <th>الكمية </th>
                    <th> عيار</th>
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