
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"> بنزين 91- قيمة العداد </label>
        <div class="col-sm-8">
          <input type="number" name="number_initial_91" class="form-control" placeholder="بنزين"value="{{ old('number_initial_91' , $settings->number_initial_91) }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"> ديزل- قيمة العداد </label>
        <div class="col-sm-8">
          <input type="number" name="number_initial_diesel" class="form-control" placeholder="ديزل"value="{{ old('number_initial_diesel', $settings->number_initial_diesel) }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">بنزين 95- قيمة العداد </label>
        <div class="col-sm-8">
          <input type="number" name="number_initial_95" class="form-control" placeholder="بنزين 95"value="{{ old('number_initial_95' , $settings->number_initial_95) }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"> كاز- قيمة العداد </label>
        <div class="col-sm-8">
          <input type="number" name="number_initial_kaz" class="form-control" placeholder="كاز"value="{{ old('number_initial_kaz', $settings->number_initial_kaz) }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"> ماء- قيمة العداد </label>
        <div class="col-sm-8">
          <input type="number" name="number_initial_water" class="form-control" placeholder="ماء"value="{{ old('number_initial_water', $settings->number_initial_water) }}">
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
  