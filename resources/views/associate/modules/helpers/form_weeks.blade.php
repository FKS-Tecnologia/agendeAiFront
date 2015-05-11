{!! Form::label($name, $label.' :') !!}<br/>

<div class="btn-group" data-toggle="buttons">
    @foreach($weeks as $week)
        <label class="btn btn-primary {{{ in_array($week, $value) ? 'active' : '' }}}">
            <input type="checkbox" autocomplete="off" {{{ in_array($week, $value) ? 'checked' : '' }}}> {{ $week  }}
        </label>
    @endforeach
</div>