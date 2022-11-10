    <div class="form-group">
        <select class="form-control select2-no-search" value=""  name="roles">
            <option value="" disabled="">Select roles</option>
            @foreach ($roles as $item)
            @if (isset($model))
            {{--  edit  --}}
            <option value="{{$item}}" {{ in_array($item, $AdminRole) ?'selected':''}}>{{$item}}</option>
            @else
            {{--  create  --}}
            <option value="{{$item}}" @if (old('roles')==$item) {{ 'selected' }} @endif >{{$item}}</option>
            @endif
            @endforeach
        </select>
    </div>
