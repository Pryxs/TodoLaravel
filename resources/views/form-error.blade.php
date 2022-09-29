@if($errors->has($field_name))
    <span>{{$errors->first($field_name)}}</span>
@endif