
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', isset($biography->name) ? $biography->name : null) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
    <label for="age" class="col-md-2 control-label">Age</label>
    <div class="col-md-10">
        <input class="form-control" name="age" type="number" id="age" value="{{ old('age', isset($biography->age) ? $biography->age : null) }}" min="18" max="99" required="true" placeholder="Enter age here...">
        {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('biography') ? 'has-error' : '' }}">
    <label for="biography" class="col-md-2 control-label">Biography</label>
    <div class="col-md-10">
        <textarea class="form-control" name="biography" cols="50" rows="10" id="biography" maxlength="1000" placeholder="Enter biography here...">{{ old('biography', isset($biography->biography) ? $biography->biography : null) }}</textarea>
        {!! $errors->first('biography', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sport') ? 'has-error' : '' }}">
    <label for="sport" class="col-md-2 control-label">Sport</label>
    <div class="col-md-10">
        <select class="form-control" id="sport" name="sport" required="true">
        	    <option value="" style="display: none;" {{ old('sport', isset($biography->sport) ? $biography->sport : '') == '' ? 'selected' : '' }} disabled selected>Select sport</option>
        	@foreach (['basketball' => 'basketball',
'football' => 'football',
'soccer' => 'soccer'] as $key => $text)
			    <option value="{{ $key }}" {{ old('sport', isset($biography->sport) ? $biography->sport : null) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('sport', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
    <label for="gender" class="col-md-2 control-label">Gender</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="gender_">
            	<input id="gender_" class="" name="gender" type="radio" value="" required="true" {{ old('gender', isset($biography->gender) ? $biography->gender : null) == '' ? 'checked' : '' }}>
                Prefer not to say
            </label>
        </div>
        <div class="radio">
            <label for="gender_1">
            	<input id="gender_1" class="" name="gender" type="radio" value="1" required="true" {{ old('gender', isset($biography->gender) ? $biography->gender : null) == '1' ? 'checked' : '' }}>
                Male
            </label>
        </div>
        <div class="radio">
            <label for="gender_2">
            	<input id="gender_2" class="" name="gender" type="radio" value="2" required="true" {{ old('gender', isset($biography->gender) ? $biography->gender : null) == '2' ? 'checked' : '' }}>
                Female
            </label>
        </div>

        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('colors') ? 'has-error' : '' }}">
    <label for="colors" class="col-md-2 control-label">Colors</label>
    <div class="col-md-10">
        <label for="colors_green" class="checkbox-inline">
            <input id="colors_green" class="required" name="colors[]" type="checkbox" value="Green" {{ in_array('Green', old('colors', isset($biography->colors) ? $biography->colors : [])) ? 'checked' : '' }}>
            Green
        </label>
        <label for="colors_blue" class="checkbox-inline">
            <input id="colors_blue" class="required" name="colors[]" type="checkbox" value="Blue" {{ in_array('Blue', old('colors', isset($biography->colors) ? $biography->colors : [])) ? 'checked' : '' }}>
            Blue
        </label>
        <label for="colors_black" class="checkbox-inline">
            <input id="colors_black" class="required" name="colors[]" type="checkbox" value="Black" {{ in_array('Black', old('colors', isset($biography->colors) ? $biography->colors : [])) ? 'checked' : '' }}>
            Black
        </label>
        <label for="colors_white" class="checkbox-inline">
            <input id="colors_white" class="required" name="colors[]" type="checkbox" value="White" {{ in_array('White', old('colors', isset($biography->colors) ? $biography->colors : [])) ? 'checked' : '' }}>
            White
        </label>
        <label for="colors_brown" class="checkbox-inline">
            <input id="colors_brown" class="required" name="colors[]" type="checkbox" value="Brown" {{ in_array('Brown', old('colors', isset($biography->colors) ? $biography->colors : [])) ? 'checked' : '' }}>
            Brown
        </label>
        <label for="colors_yellow" class="checkbox-inline">
            <input id="colors_yellow" class="required" name="colors[]" type="checkbox" value="Yellow" {{ in_array('Yellow', old('colors', isset($biography->colors) ? $biography->colors : [])) ? 'checked' : '' }}>
            Yellow
        </label>
        <label for="colors_red" class="checkbox-inline">
            <input id="colors_red" class="required" name="colors[]" type="checkbox" value="Red" {{ in_array('Red', old('colors', isset($biography->colors) ? $biography->colors : [])) ? 'checked' : '' }}>
            Red
        </label>

        {!! $errors->first('colors', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('is_retired') ? 'has-error' : '' }}">
    <label for="is_retired" class="col-md-2 control-label">Is Retired</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="is_retired_1">
            	<input id="is_retired_1" class="" name="is_retired" type="checkbox" value="1" {{ old('is_retired', isset($biography->is_retired) ? $biography->is_retired : null) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('is_retired', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
    <label for="photo" class="col-md-2 control-label">Photo</label>
    <div class="col-md-10">
        <label class="btn btn-default">
        	Browse <input type="file" name="photo" id="photo" class="hidden">
        </label>
        
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('range') ? 'has-error' : '' }}">
    <label for="range" class="col-md-2 control-label">Range</label>
    <div class="col-md-10">
        <input class="form-control" name="range" type="text" id="range" value="{{ old('range', isset($biography->range) ? $biography->range : null) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter range here...">
        {!! $errors->first('range', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('month') ? 'has-error' : '' }}">
    <label for="month" class="col-md-2 control-label">Month</label>
    <div class="col-md-10">
        <input class="form-control" name="month" type="text" id="month" value="{{ old('month', isset($biography->month) ? $biography->month : null) }}" min="-2147483648" max="2147483647" placeholder="Enter month here...">
        {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
    </div>
</div>

