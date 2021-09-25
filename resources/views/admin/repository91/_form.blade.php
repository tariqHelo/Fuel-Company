
<div class="card-body">
   <div class="form-group">
      <label>الوارد  </label>
      <input type="number" class="form-control  @error('pincher') is-invalid @enderror" name="pincher"  value="">
        @error('pincher')
          <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    {{-- <div class="form-group">
      <label> البقالة  </label>
      <input type="number" class="form-control  @error('grocery') is-invalid @enderror" name="grocery"  value="">
        @error('grocery')
          <p class="text-danger">{{ $message }}</p>
        @enderror
    </div> --}}
  
         
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
        <a href="{{route('repository91.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
  </div>
<!-- /.card -->
  