
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($biography)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
    <label for="age" class="col-md-2 control-label">Age</label>
    <div class="col-md-10">
        <input class="form-control" name="age" type="number" id="age" value="{{ old('age', optional($biography)->age) }}" min="18" max="99" required="true" placeholder="Enter age here...">
        {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('biography') ? 'has-error' : '' }}">
    <label for="biography" class="col-md-2 control-label">Biography</label>
    <div class="col-md-10">
        <textarea class="form-control" name="biography" cols="50" rows="10" id="biography" maxlength="1000" placeholder="Enter biography here...">{{ old('biography', optional($biography)->biography) }}</textarea>
        {!! $errors->first('biography', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sport') ? 'has-error' : '' }}">
    <label for="sport" class="col-md-2 control-label">Sport</label>
    <div class="col-md-10">
        <select class="form-control" id="sport" name="sport" required="true">
        	    <option value="" style="display: none;" {{ old('sport', optional($biography)->sport ?: '') == '' ? 'selected' : '' }} disabled selected>Select sport</option>
        	@foreach (['basketball' => 'basketball',
'football' => 'football',
'soccer' => 'soccer'] as $key => $text)
			    <option value="{{ $key }}" {{ old('sport', optional($biography)->sport) == $key ? 'selected' : '' }}>
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
            	<input id="gender_" class="" name="gender" type="radio" value="" required="true" {{ old('gender', optional($biography)->gender) == '' ? 'checked' : '' }}>
                Prefer not to say
            </label>
        </div>
        <div class="radio">
            <label for="gender_1">
            	<input id="gender_1" class="" name="gender" type="radio" value="1" required="true" {{ old('gender', optional($biography)->gender) == '1' ? 'checked' : '' }}>
                Male
            </label>
        </div>
        <div class="radio">
            <label for="gender_2">
            	<input id="gender_2" class="" name="gender" type="radio" value="2" required="true" {{ old('gender', optional($biography)->gender) == '2' ? 'checked' : '' }}>
                Female
            </label>
        </div>

        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('colors') ? 'has-error' : '' }}">
    <label for="colors" class="col-md-2 control-label">Colors</label>
    <div class="col-md-10">
        <label for="colors_0" class="checkbox-inline">
            <input id="colors_0" class="required" name="colors[]" type="checkbox" value="0"
            {{ in_array('0', old('colors', (array) optional($biography)->colors)) ? 'checked' : '' }}>
            Green
        </label>
        <label for="colors_1" class="checkbox-inline">
            <input id="colors_1" class="required" name="colors[]" type="checkbox" value="1" {{ in_array('1', (array) old('colors', optional($biography)->colors)) ? 'checked' : '' }}>
            Blue
        </label>
        <label for="colors_2" class="checkbox-inline">
            <input id="colors_2" class="required" name="colors[]" type="checkbox" value="2" {{ in_array('2', (array) old('colors', optional($biography)->colors)) ? 'checked' : '' }}>
            Black
        </label>
        <label for="colors_3" class="checkbox-inline">
            <input id="colors_3" class="required" name="colors[]" type="checkbox" value="3" {{ in_array('3', (array) old('colors', optional($biography)->colors)) ? 'checked' : '' }}>
            White
        </label>
        <label for="colors_4" class="checkbox-inline">
            <input id="colors_4" class="required" name="colors[]" type="checkbox" value="4" {{ in_array('4', (array) old('colors', optional($biography)->colors)) ? 'checked' : '' }}>
            Brown
        </label>
        <label for="colors_5" class="checkbox-inline">
            <input id="colors_5" class="required" name="colors[]" type="checkbox" value="5" {{ in_array('5', (array) old('colors', optional($biography)->colors)) ? 'checked' : '' }}>
            Yellow
        </label>
        <label for="colors_6" class="checkbox-inline">
            <input id="colors_6" class="required" name="colors[]" type="checkbox" value="6" {{ in_array('6', (array) old('colors', optional($biography)->colors)) ? 'checked' : '' }}>
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
            	<input id="is_retired_1" class="" name="is_retired" type="checkbox" value="1" {{ old('is_retired', optional($biography)->is_retired) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('is_retired', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
    <label for="photo" class="col-md-2 control-label">Photo</label>
    <div class="col-md-10">
        <div class="input-group uploaded-file-group">
            <label class="input-group-btn">
                <span class="btn btn-default">
                    Browse <input type="file" name="photo" id="photo" class="hidden">
                </span>
            </label>
            <input type="text" class="form-control uploaded-file-name" readonly>
        </div>

        @if (isset($biography->photo) && !empty($biography->photo))
            <div class="input-group input-width-input">
                <span class="input-group-addon">
                    <input type="checkbox" class="custom-delete-file"> Delete
                </span>

                <span class="input-group-addon custom-delete-file-name">
                    {{ basename($biography->photo) }}
                </span>

                <input type="checkbox" name="custom_delete_photo" class="custom-delete-flag hidden">
            </div>
        @endif
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('range') ? 'has-error' : '' }}">
    <label for="range" class="col-md-2 control-label">Range</label>
    <div class="col-md-10">
        <select class="form-control" id="range" name="range">
        	    <option value="" style="display: none;" {{ old('range', optional($biography)->range ?: '') == '' ? 'selected' : '' }} disabled selected>Enter range here...</option>
        	@foreach (range(1, 10) as $value)
			    <option value="{{ $value }}" {{ old('range', optional($biography)->range) == $value ? 'selected' : '' }}>
			    	{{ $value }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('range', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('month') ? 'has-error' : '' }}">
    <label for="month" class="col-md-2 control-label">Month</label>
    <div class="col-md-10">
        <select class="form-control" id="month" name="month">
            <option value="" style="display: none;" {{ old('month', optional($biography)->month ?: '') == '' ? 'selected' : '' }} disabled selected>Enter month here...</option>
        	@foreach (range(1, 12) as $value)
			    <option value="{{ $value }}" {{ old('month', optional($biography)->month) == $value ? 'selected' : '' }}>
			    	{{ date('F', mktime(0, 0, 0, $value, 1)) }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
    </div>
</div>
