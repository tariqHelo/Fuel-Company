
    <div class="card-body">
                  <div class="form-group">
                    <label>البيان   </label>
                    <input type="string" class="form-control  @error('statement') is-invalid @enderror" name="statement"  value="{{ old('statement' , $meran->statement) }}">
                      @error('statement')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label> دائن جزئي  </label>
                    <input type="number" class="form-control  @error('partial_credit') is-invalid @enderror" name="partial_credit"  value="{{ old('partial_credit' , $meran->partial_credit) }}">
                      @error('partial_credit')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  {{-- <div class="form-group">
                    <label> دائن كلي   </label>
                    <input type="number" class="form-control  @error('total_credit') is-invalid @enderror" name="total_credit"  value="{{ old('total_credit' , $meran->total_credit) }}">
                      @error('total_credit')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div> --}}
                  <div class="form-group">
                    <label> مدين جزئي  </label>
                    <input type="number" class="form-control  @error('partial_debt') is-invalid @enderror" name="partial_debt"  value="{{ old('partial_debt' , $meran->partial_debt) }}">
                      @error('partial_debt')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  {{-- <div class="form-group">
                    <label> مدين كلي  </label>
                    <input type="integer" class="form-control  @error('total_debt') is-invalid @enderror" name="total_debt"  value="{{ old('total_debt' , $meran->total_debt) }}">
                      @error('total_debt')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div> --}}
                  {{-- <div class="form-group">
                      <label for="status"> حالة النشاط</label>
                      <div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="status" id="status-active" value="active" @if(old('status', $meran->status) == 'active') checked @endif>
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
         <a href="{{route('meran.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>