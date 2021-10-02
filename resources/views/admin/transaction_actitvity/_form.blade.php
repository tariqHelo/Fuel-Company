
    <div class="card-body">
                  
                   <div class="form-group">
                    <label> إختيار إسم النشاط</label>
                     <select class="form-control select2  {{ $errors->has('actitvity_id') ? 'is-invalid' : '' }}"  name="actitvity_id">
                        <option value="">--</option>
                        @foreach($activities as $id => $activitiy)
                             <option value="{{ $id }}" @if($id == old('actitvity_id' , $transactitvity->actitvity)) selected @endif>{{ $activitiy }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label> القيمة  </label>
                    <input type="string" required class="form-control  @error('price') is-invalid @enderror" name="price"  placeholder="القيمة" value="{{ old('price', $transactitvity->price) }}">
                      @error('price')
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
         <a href="{{route('transaction_actitvity.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>