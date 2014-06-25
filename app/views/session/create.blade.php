@extends('layout.simple')

@section('main')
    <section class="container" id="UserLoginMain">
        <main class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                {{ Form::open(['route' => 'session.store']) }}
                    <header class="text-center">
                        <img alt="Read'n'Burn" src="src/img/logo.png">
                    </header>
                    <section class="panel panel-success">
                        <div class="panel-heading">
                            <h2 class="panel-title">Login:</h2>
                        </div>
                        <div class="panel-body no-bottom-padding">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email@example.com', 'required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password', 'required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <a href="{{ asset('register') }}" class="btn btn-default">Register</a>
<!--                                    {{ Form::submit('Login', ['class' => 'btn btn-success pull-right']) }}-->
                                    <button type="submit" class="btn btn-success pull-right">Login&nbsp;<i class="fa fa-sign-in"></i></button>
                                </div>
                            </div>
                        </div>
                    </section>
                {{ Form::close() }}
            </div>
        </main>
    </section>
@stop
