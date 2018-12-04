
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-2 control-label">Full name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', isset($biography) ? $biography->name : null) }}" minlength="1" maxlength="100" required="true">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    <label for="age" class="col-md-2 control-label">Age</label>
    <div class="col-md-10">
        <input class="form-control" name="age" type="number" id="age" value="{{ old('age', isset($biography) ? $biography->age : null) }}" min="18" max="80" required="true">
        {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('biography') ? 'has-error' : ''}}">
    <label for="biography" class="col-md-2 control-label">Biography</label>
    <div class="col-md-10">
        <textarea class="form-control" name="biography" cols="50" rows="10" id="biography" maxlength="1000">{{ old('biography', isset($biography) ? $biography->biography : null) }}</textarea>
        {!! $errors->first('biography', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sport') ? 'has-error' : ''}}">
    <label for="sport" class="col-md-2 control-label">Favorite sport</label>
    <div class="col-md-10">
        <select class="form-control" id="sport" name="sport"  required="true">
        	    <option value="" style="display: none;" {{ old('sport', isset($biography) ? $biography->sport : '') == '' ? 'selected' : '' }} disabled selected>Select a sport</option>
        	@foreach (['basketball' => 'Basketball',
'football' => 'Football',
'soccer' => 'Soccer'] as $value => $title)
			    <option value="{{ $value }}" {{ old('sport', isset($biography) ? $biography->sport : '') == $value ? 'selected' : '' }}>
			    	{{ $title }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('sport', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    <label for="gender" class="col-md-2 control-label">Gender</label>
    <div class="col-md-10">
        <div class="radio">
            <label for='gender_'>
            	<input id="gender_" class="" name="gender" type="radio" value="" required="true" {{ old('gender', isset($biography) ? $biography->gender : '') == '' ? 'checked' : '' }}>
                Please select your gender
            </label>
        </div>
        <div class="radio">
            <label for='gender_male'>
            	<input id="gender_male" class="" name="gender" type="radio" value="male" required="true" {{ old('gender', isset($biography) ? $biography->gender : '') == 'male' ? 'checked' : '' }}>
                Male
            </label>
        </div>
        <div class="radio">
            <label for='gender_female'>
            	<input id="gender_female" class="" name="gender" type="radio" value="female" required="true" {{ old('gender', isset($biography) ? $biography->gender : '') == 'female' ? 'checked' : '' }}>
                Female
            </label>
        </div>

        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('colors') ? 'has-error' : ''}}">
    <label for="colors" class="col-md-2 control-label">Favorite colors</label>
    <div class="col-md-10">
        <label for="colors_black" class="checkbox-inline">
            <input id="colors_black" class="required" name="colors[]" type="checkbox" value="Black" {{ in_array('Black', old('colors', isset($biography) ? $biography->colors : [])) ? 'checked' : '' }}>
            Black
        </label>
        <label for="colors_red" class="checkbox-inline">
            <input id="colors_red" class="required" name="colors[]" type="checkbox" value="Red" {{ in_array('Red', old('colors', isset($biography) ? $biography->colors : [])) ? 'checked' : '' }}>
            Red
        </label>
        <label for="colors_green" class="checkbox-inline">
            <input id="colors_green" class="required" name="colors[]" type="checkbox" value="Green" {{ in_array('Green', old('colors', isset($biography) ? $biography->colors : [])) ? 'checked' : '' }}>
            Green
        </label>
        <label for="colors_yellow" class="checkbox-inline">
            <input id="colors_yellow" class="required" name="colors[]" type="checkbox" value="Yellow" {{ in_array('Yellow', old('colors', isset($biography) ? $biography->colors : [])) ? 'checked' : '' }}>
            Yellow
        </label>
        <label for="colors_white" class="checkbox-inline">
            <input id="colors_white" class="required" name="colors[]" type="checkbox" value="White" {{ in_array('White', old('colors', isset($biography) ? $biography->colors : [])) ? 'checked' : '' }}>
            White
        </label>

        {!! $errors->first('colors', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="col-md-2 control-label">Photo</label>
    <div class="col-md-10">
        <label class="btn btn-default">
        	Browse <input type="file" name="photo" id="photo" class="hidden">
        </label>
        
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('range') ? 'has-error' : ''}}">
    <label for="range" class="col-md-2 control-label">Range</label>
    <div class="col-md-10">
        <select class="form-control" id="range" name="range">
        	    <option value="" style="display: none;" {{ old('range', isset($biography) ? $biography->range : '') == '' ? 'selected' : '' }} disabled selected>Select a number</option>
        	@foreach (range(20, 50) as $value)
			    <option value="{{ $value }}" {{ old('range', isset($biography) ? $biography->range : '') == $value ? 'selected' : '' }}>
			    	{{ $value }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('range', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="col-md-2 control-label">Month</label>
    <div class="col-md-10">
        <select class="form-control" id="month" name="month">
            <option value="" style="display: none;" {{ old('month', isset($biography) ? $biography->month : '') == '' ? 'selected' : '' }} disabled selected>Select a month</option>
        	@foreach (range(1, 12) as $value)
			    <option value="{{ $value }}" {{ old('month', isset($biography) ? $biography->month : '') == $value ? 'selected' : '' }}>
			    	{{ date('F', mktime(0, 0, 0, $value, 1)) }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-10">
        <input class="btn btn-primary" type="submit" value="{{ isset($submitButtonLabel) ? $submitButtonLabel : 'Add' }}">
    </div>
</div>