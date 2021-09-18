@extends('layouts.admin')

@section('title', ' جميع نقاط البيع')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Products</li>
</ol>
@endsection



@section('content')
@include('shared.msg')
    <!-- left column -->
          <div class="col-md-12">
             @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $message)
                      <li>{{ $message }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title-rtl">تعديل نقطقة بيع</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('sellingpoints.update' , $sellingpoint->id)}}" method="POST">
                @csrf
                @method('PATCH')
                 @include('admin.selling_points._form', [
                    'button' => 'تعديل'
                ])
              </form>
            </div>
            <!-- /.card -->
         </div>
@endsection