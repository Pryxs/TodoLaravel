@if($errors->has($field_name))
    <span class="form_error">{{$errors->first($field_name)}}</span>
@endif