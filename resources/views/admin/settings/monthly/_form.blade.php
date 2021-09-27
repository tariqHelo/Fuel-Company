
<div class="card-body">
    <div class="row">
      <div class="col-6">
        <label for="exampleInputEmail1"> السعر الإولي خلال 10 أيام</label>
        <input type="string" name="price1" class="form-control"  placeholder="خلال 10 أيام">
      </div>
      <div class="col-6">
        <label for="exampleInputEmail1">السعر الثاني خلال باقي الشهر</label>
        <input type="string" name="price2" class="form-control"  placeholder="خلال باقي الشهر" >
      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
        <a href="{{route('dashboard')}}" class="btn btn-danger" type="button"> إلغاء</a>
  </div>
<!-- /.card -->
  