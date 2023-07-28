<div class="form-group">
    <label class="input-group-text" for="{{$name}}">{{$title}}</label>
    <input class="form-control" type="{{$type}}" value="{{$value}}" name="{{$name}}" id="{{$name}}"  placeholder="{{$placeholder}}" {{$disabled}}>
    @error($name)
    <small class="invalid-feedback">{{$message}}</small>
    @enderror
</div>
