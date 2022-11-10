    <div class="form-group">
        <select class="form-control select2-no-search" value=""  name="{{$name}}">
            <option value="" disabled="">Select {{isset($nameselect)?$nameselect:''}}</option>
            @foreach ($foreach as $item)
            @if (isset($model))
            {{--  edit  --}}
            <option value="{{$item}}" {{ $item == $model->$name ?'selected':''}}>{{$item}}</option>
            @else
            {{--  create  --}}
            <option value="{{$item}}" @if (old($name)==$item) {{ 'selected' }} @endif >{{$item}}</option>
            @endif
            @endforeach
        </select>
    </div>