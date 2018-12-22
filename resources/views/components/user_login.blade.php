<h1>User Registration</h1>
<h2>{{!empty($registered_message) ? $registered_message : ''}}</h2>
{!! Form::open(['url' => '/login']) !!}
    <div class="form-group">
        {{ Form::label('email:', null) }}
        {{ Form::email('email', '') }}
    </div>
    <div class="form-group">
        {{ Form::label('password:', null) }}
        {{ Form::password('password') }}
    </div>
    
    {{ Form::submit('Login' , ['class' => 'btn btn-success']) }}

    {!! Form::close() !!}