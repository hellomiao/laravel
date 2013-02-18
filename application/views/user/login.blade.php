{{ Form::open('login') }}

@if (Session::has('login_errors'))
<span class="error">Username or password incorrect.</span>
@endif

<p>{{ Form::label('email', '电子邮箱') }}</p>
<p>{{ Form::text('email') }}</p>

<p>{{ Form::label('password', '密码') }}</p>
<p>{{ Form::text('password') }}</p>

<p>{{ Form::submit('登录') }}</p>
{{ Form::close() }}