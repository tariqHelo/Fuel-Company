
<div class="card-body">
    <div class="row">
      <div class="col-6">
        <label for="exampleInputEmail1"> السعر الإولي خلال 10 أيام</label>
        <input type="string" name="price1_91" class="form-control"  placeholder="خلال 10 أيام" value="{{ old('price1_91' , $monthly->price1_91) }}"  >
      </div>
      <div class="col-6">
        <label for="exampleInputEmail1">السعر الثاني خلال باقي الشهر</label>
        <input type="string" name="price2_91" class="form-control"  placeholder="خلال باقي الشهر" value="{{ old('price1_91' , $monthly->price2_91) }}">
      </div>
    </div> 
</div>
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title-rtl">ديزل</h3>
  </div>
  <div class="card-body">
      <div class="row">
        <div class="col-6">
          <label for="exampleInputEmail1"> السعر الإولي خلال 10 أيام</label>
          <input type="string" name="price1_diesel" class="form-control"  placeholder="خلال 10 أيام"  value="{{ old('price1_91' , $monthly->price1_diesel) }}" >
        </div>
        <div class="col-6">
          <label for="exampleInputEmail1">السعر الثاني خلال باقي الشهر</label>
          <input type="string" name="price2_diesel" class="form-control"  placeholder="خلال باقي الشهر" value="{{ old('price1_91' , $monthly->price2_diesel) }}">
        </div>
      </div> 
  </div>
</div>
<div class="card card-red">
  <div class="card-header">
    <h3 class="card-title-rtl">بنزين 95</h3>
  </div>
  <div class="card-body">
      <div class="row">
        <div class="col-6">
          <label for="exampleInputEmail1"> السعر الإولي خلال 10 أيام</label>
          <input type="string" name="price1_95" class="form-control"  placeholder="خلال 10 أيام" value="{{ old('price1_91' , $monthly->price1_95) }}"  >
        </div>
        <div class="col-6">
          <label for="exampleInputEmail1">السعر الثاني خلال باقي الشهر</label>
          <input type="string" name="price2_95" class="form-control"  placeholder="خلال باقي الشهر" value="{{ old('price1_91' , $monthly->price2_95) }}">
        </div>
      </div> 
  </div>
</div>
<div class="card card-dark">
  <div class="card-header">
    <h3 class="card-title-rtl">كاز</h3>
  </div>
  <div class="card-body">
      <div class="row">
        <div class="col-6">
          <label for="exampleInputEmail1"> السعر الإولي خلال 10 أيام</label>
          <input type="string" name="price1_kaz" class="form-control"  placeholder="خلال 10 أيام" value="{{ old('price1_91' , $monthly->price1_kaz) }}"  >
        </div>
        <div class="col-6">
          <label for="exampleInputEmail1">السعر الثاني خلال باقي الشهر</label>
          <input type="string" name="price2_kaz" class="form-control"  placeholder="خلال باقي الشهر" value="{{ old('price1_91' , $monthly->price2_kaz) }}">
        </div>
      </div> 
  </div>
</div>
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title-rtl">ماء</h3>
  </div>
  <div class="card-body">
      <div class="row">
        <div class="col-6">
          <label for="exampleInputEmail1"> السعر الشهري</label>
          <input type="string" name="price_water" class="form-control"  placeholder="خلال 10 أيام"  value="{{ old('price1_91' , $monthly->price_water) }}" >
        </div>
        {{-- <div class="col-6">
          <label for="exampleInputEmail1">السعر الثاني خلال باقي الشهر</label>
          <input type="string" name="price2_92" class="form-control"  placeholder="خلال باقي الشهر">
        </div> --}}
      </div> 
  </div>
</div>  
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
        <a href="{{route('dashboard')}}" class="btn btn-danger" type="button"> إلغاء</a>
  </div>
<!-- /.card -->
   value="{{ old('price1_91' , $monthly->price1_91) }}"