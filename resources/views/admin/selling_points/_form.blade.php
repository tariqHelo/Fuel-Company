
    <div class="card-body">
        <div class="form-group">
          <label> إسم نقطة البيع  </label>
          <input type="string" required class="form-control  @error('name') is-invalid @enderror" name="name"  placeholder=" إسم البنك" value="{{ old('name' , $sellingpoints->name) }}">
            @error('name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="status"> حالة نقطة البيع</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status-active" value="active" @if(old('status', $sellingpoints->status) == 'active') checked @endif>
                    <label class="form-check-label" for="status-active">
                        فعال 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" @if(old('status', $sellingpoints->status) == 'draft') checked @endif>
                    <label class="form-check-label" for="status-draft">
                          غير فعال
                    </label>
                </div>
                @error('status')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            
        </div>
      </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">{{$button}}</button>
         <a href="{{route('sellingpoints.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>