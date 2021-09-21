
    <div class="card-body">
                  
                   <div class="form-group">
                    <label> إختيار إسم البنك</label>
                     <select class="form-control select2  {{ $errors->has('bank_id') ? 'is-invalid' : '' }}"  name="bank_id">
                        <option value="">--</option>
                        @foreach($banks as $id => $bank)
                             <option value="{{ $id }}" @if($id == old('bank_id' , $transactionbanks->bank)) selected @endif>{{ $bank }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label> القيمة  </label>
                    <input type="string" required class="form-control  @error('price') is-invalid @enderror" name="price"  placeholder="القيمة" value="{{ old('price', $transactionbanks->price) }}">
                      @error('price')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                    {{-- <div class="form-group">
                        <label for="status"> حالة البنك</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-active" value="active" @if(old('status', $bank->status) == 'active') checked @endif>
                                <label class="form-check-label" for="status-active">
                                    فعال 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" @if(old('status', $bank->status) == 'draft') checked @endif>
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
         <a href="{{route('banks.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>