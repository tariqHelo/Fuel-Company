
    <div class="card-body">
                  <div class="form-group">
                    <label>إسم النشاط  </label>
                    <input type="string" class="form-control  @error('name') is-invalid @enderror" name="name"  value="{{ old('name' , $actitvity->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="status"> حالة النشاط</label>
                      <div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="status" id="status-active" value="active" @if(old('status', $actitvity->status) == 'active') checked @endif>
                              <label class="form-check-label" for="status-active">
                                  فعال 
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" @if(old('status', $actitvity->status) == 'draft') checked @endif>
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
         <a href="{{route('actitvity.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>