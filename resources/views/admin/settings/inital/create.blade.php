@extends('layouts.admin')

@section('title', '')

@section('breadcrumb')
@endsection
             
@section('content')
<div class="col-md-12">
              @include('shared.msg')
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title-rtl">رصيد أول الفترة</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('initial.store')}}" method="POST">
                @csrf
                @include('admin.settings.inital._form',[
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
//   tags: true
// });
</script>
@endsection