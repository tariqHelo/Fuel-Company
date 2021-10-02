
<div class="card-body">
    <div class="row">
      {{-- <div class="col-4">
        <label for="exampleInputEmail1">السعر</label>
        <input type="number" name="price" class="form-control"  placeholder="أدخل السعر" value="{{old('price')}}">
      </div> --}}
      <div class="col-4">
        <label for="exampleInputEmail1">العيار</label>
        <input type="number" name="caliber" class="form-control"  placeholder="أدخل السعر" value="{{old('caliber')}}">
      </div>
      <div class="col-4">
          <label for="exampleInputEmail1">المقاس</label>
          <input type="number" name="size" class="form-control"  placeholder="أدخل السعر" value="{{old('size')}}">
      </div>
    </div>
    
    <div class="card-body">           
    </div>
    <div class="mt-repeater-item">
        <div class="row">
            <div class="col-md-2">
                <label class="control-label"> عداد 1</label>
                <input  name="data[0][meter1]" class="form-control" type="number" placeholder="ماكينة رقم 1">
            </div>
            <div class="col-md-2">
                <label class="control-label"> عداد 2 </label>
                <input  name="data[0][meter2]"   class="form-control" type="number" placeholder="ماكينة رقم 2">
            </div>
            <div class="col-md-2">
                <label class="control-label"> عداد 3</label>
                <input  name="data[0][meter3]" class="form-control" type="number" placeholder="ماكينة رقم 3">
            </div>
            <div class="col-md-2">
                <label class="control-label"> عدداد 4</label>
                <input  name="data[0][meter4]"  class="form-control" type="number" placeholder="ماكينة رقم 4">
            </div>
            <div class="col-md-2">
                <label class="control-label">عداد 5</label>
                <input  name="data[0][meter5]"    class="form-control" type="number" placeholder="ماكينة رقم 5">
            </div>
            <div class="col-md-1">
                <label class="control-label">عداد 6</label>
                <input  name="data[0][meter6]"    class="form-control" type="number" placeholder="ماكينة رقم 6">
            </div>
            <div class="col-md-1" style="margin: 30px 0">
                <a href="javascript:;" data-repeater-delete class="delete-row btn btn-danger btn-sm btn-icon btn-circle mt-repeater-delete">
                  <i class="fa fa-trash"></i>
                </a>
            </div>
      </div>
    </div>
    <div>
       <button type="button" class="btn btn-primary add-new-row" data-index="0"><i class="fa fa-plus"></i> </button>      
    </div>
         
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
        <a href="{{route('petrol91.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
  </div>
<!-- /.card -->
  