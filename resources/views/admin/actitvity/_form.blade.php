
    <div class="card-body">
                  <div class="form-group">
                    <label>البنشر  </label>
                    <input type="number" class="form-control  @error('pincher') is-invalid @enderror" name="pincher"  value="{{ old('pincher' , $actitvity->pincher) }}">
                      @error('pincher')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label> البقالة  </label>
                    <input type="number" class="form-control  @error('grocery') is-invalid @enderror" name="grocery"  value="{{ old('grocery' , $actitvity->grocery) }}">
                      @error('grocery')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label> المغسلة  </label>
                    <input type="number" class="form-control  @error('washing') is-invalid @enderror" name="washing"  value="{{ old('washing' , $actitvity->washing) }}">
                      @error('washing')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label> الشقة  </label>
                    <input type="number" class="form-control  @error('flat') is-invalid @enderror" name="flat"  value="{{ old('flat' , $actitvity->flat) }}">
                      @error('flat')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label> الغرفة  </label>
                    <input type="integer" class="form-control  @error('room') is-invalid @enderror" name="room"  value="{{ old('room' , $actitvity->room) }}">
                      @error('room')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  {{-- <div class="form-group">
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
                      
                  </div> --}}
      </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">{{$button}}</button>
         <a href="{{route('actitvity.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>