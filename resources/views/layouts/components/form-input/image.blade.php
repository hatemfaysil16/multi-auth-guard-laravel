<input type="{{$type}}" name="{{$name}}" class="form-control @error('{{$class_validation}}') is-invalid @enderror " value="{{isset($model) ? $model->image : old($oldname)}}" placeholder="{{$placeholder}}">




