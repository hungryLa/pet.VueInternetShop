<div class="form-group">
    <label class="input-group-text" for="{{$name}}">{{$title}}</label>
    <input class="form-control" type="text" value="{{$value}}" name="{{$name}}" id="{{$name}}"  placeholder="{{$placeholder}}" {{$disabled}}>
    @error($name)
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
