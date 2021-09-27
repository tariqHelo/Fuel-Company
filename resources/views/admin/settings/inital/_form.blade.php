
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">قيمة العداد</label>
        <div class="col-sm-8">
          <input type="number" name="number_initial" class="form-control" placeholder="قيمة العداد"value="{{ old('number_initial' , $settings->number_initial) }}">
        </div>
      </div>
      {{-- <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">Remember me</label>
          </div>
        </div>
      </div> --}}
    </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
        <a href="{{route('dashboard')}}" class="btn btn-danger" type="button"> إلغاء</a>
  </div>
<!-- /.card -->
  