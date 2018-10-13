<h1>User Registration</h1>

{!! Form::open(['url' => '/registration', 'files' => true]) !!}
    <div class="form-group">
        {{ Form::label('name:', null) }}
        {{ Form::text('name', '', ['placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('user name:', null) }}
        {{ Form::text('user_name', '', ['placeholder' => '' , 'class' => 'user_name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email:', null) }}
        {{ Form::email('email', '') }}
    </div>
    <div class="form-group">
        {{ Form::label('password:', null) }}
        {{ Form::password('password') }}
    </div>
    <div class="form-group">
        {{ Form::label('retype_password:', null) }}
        {{ Form::password('retype_password' ) }}
    </div>
    <div class="form-group">
        {{ Form::label('Male:', null) }}
        {{ Form::radio('gender', 'male', true)}}
        {{ Form::label('Fe-Male:', null) }}
        {{ Form::radio('gender', 'fe-male')}}
    </div>
    <div class="form-group">
        {{ Form::label('dob', 'Date of Birth:') }}
        {{ Form::date('dob', \Carbon\Carbon::now()) }}
    </div>
    <div class="form-group">
        {{ Form::label('Select Country :', null) }}
        {{  Form::select('country', ['Pakistan' , 'India']) }}
    </div>
    <div class="form-group">
        {{ Form::label('Profile Image:', null) }}
        {{ Form::file('image') }}
    </div>
    {{ Form::submit('Register' , ['class' => 'btn btn-success']) }}

    {!! Form::close() !!}