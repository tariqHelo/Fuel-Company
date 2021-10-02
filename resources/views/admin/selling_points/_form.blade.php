
    <div class="card-body">
             <div class="form-group">
                <label>موازنة الإولي   </label>
                <input type="number" required class="form-control  @error('price1') is-invalid @enderror" name="price1"  value="{{ old('price1' , $sellingpoints->price1) }}">
                  @error('price1')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group">
                <label> موازنة الثانية   </label>
                <input type="number" class="form-control  @error('price2') is-invalid @enderror" name="price2"  value="{{ old('price2' , $sellingpoints->price2) }}">
                  @error('price2')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group">
                <label> موازنة الثالثة   </label>
                <input type="number" class="form-control  @error('price3') is-invalid @enderror" name="price3"  value="{{ old('price3' , $sellingpoints->price3) }}">
                  @error('price3')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group">
                <label>ملاحظات</label>
                 <textarea type="string" name="note" class="form-control" placeholder="أضف ملاحظات ...">
              </div>
      </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">{{$button}}</button>
         <a href="{{route('sellingpoints.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>