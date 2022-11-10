{{-- start editor  --}}
<div class="form-row">
    <div class="col">
        <label for="inputName">{{ TanslationHelper::translate('description') }} {{ TanslationHelper::translate('arabic') }}</label>
        <textarea class="form-control" aria-label="{{ TanslationHelper::translate('Enter the name in Arabic') }}" value="{{old('description[ar]')}}" name="description[ar]" required /></textarea>
    </div>
    <div class="col">
        <label for="inputName">{{ TanslationHelper::translate('description') }} {{ TanslationHelper::translate('english') }}</label>
        <textarea class="form-control" aria-label="{{ TanslationHelper::translate('Enter the name in English') }}" value="{{$category->description}}" name="description[en]" required /></textarea>
    </div>
</div>
{{-- end editor  --}}