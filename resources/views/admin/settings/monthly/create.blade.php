@extends('layouts.admin')

@section('title', 'إضافة أسعار الشهر الجديدة')

@section('breadcrumb')
{{-- <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Country</li>
</ol> --}}
@endsection
            
    
@section('content')

<div class="col-md-12">
              @include('shared.msg')
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title-rtl">بنزين 91</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('monthlyprice.store')}}" method="POST">
                @csrf
                @include('admin.settings.monthly._form',[
                  'button' => "إضافة"
                ])
              </form>
            </div>
            <!-- /.card -->
         </div>
@endsection

@section('script')
<script>

// $(".js-example-tags").select2({
//              $table->float('price1_91')->default(0);
            
// });
</script>
@endsection