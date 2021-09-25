
<div class="card-body">
     <div class="form-group">
        <label>إسم الجهة  </label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"  value="{{ old('name' , $claim->name) }}">
          @error('name')
            <p class="text-danger">{{ $message }}</p>
          @enderror
      </div>
      <div class="form-group">
        <label> المبلغ  </label>
        <input type="number" class="form-control  @error('total') is-invalid @enderror" name="total"  value="{{ old('total' , $claim->total) }}">
          @error('total')
            <p class="text-danger">{{ $message }}</p>
          @enderror
      </div>
       <div class="form-group">
        <label>ملاحظات</label>
        <input type="text" name="note" class="form-control" placeholder="أضف ملاحظات ...">
      </div>
          
 </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
        <a href="{{route('claims.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
  </div>
<!-- /.card -->
  