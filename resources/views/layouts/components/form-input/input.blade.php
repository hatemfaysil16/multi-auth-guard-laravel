<input type="{{$type}}" name="{{$name}}" class="form-control @error('{{$class_validation}}') is-invalid @enderror " value="{{isset($value) ? $value : old($oldname)}}" 
placeholder="{{$placeholder}}" {{$required}}>


