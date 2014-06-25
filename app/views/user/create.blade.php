@extends('layout.simple')

@section('main')
<section class="container" id="UserLoginMain">
    <main class="row">
        <div class="col-xs-12 col-lg-10 col-lg-offset-1">
            {{ Form::open(['route' => 'user.store']) }}
                <header class="text-center">
                    <img alt="Read'n'Burn" src="src/img/logo.png">
                </header>
                <section class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">Register:</h2>
                    </div>
                    <div class="panel-body no-bottom-padding">
                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email@example.com']) }}
                                </div>
                                {{ $errors->first('email', '<span class="help-block text-danger no-bottom-margin">:message</span>') }}
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                {{ Form::label('username', 'Username:', ['class' => 'control-label']) }}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
                                </div>
                                {{ $errors->first('username', '<span class="help-block text-danger no-bottom-margin">:message</span>') }}
                            </div>
                            <div class="clearfix visible-sm"></div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                                </div>
                                {{ $errors->first('password', '<span class="help-block text-danger no-bottom-margin">:message</span>') }}
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                {{ Form::label('passwordConfirmation', 'Confirm password:', ['class' => 'control-label']) }}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    {{ Form::password('passwordConfirmation', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                                </div>
                                {{ $errors->first('passwordConfirmation', '<span class="help-block text-danger no-bottom-margin">:message</span>') }}
                            </div>
                            <div class="clearfix visible-lg"></div>
                            <div class="form-group col-xs-12 col-sm-6">
                                {{ Form::label('keyword', 'Keyword:', ['class' => 'control-label']) }}
                                <div class="input-group">
                                    <input type="text" class="form-control" value="" placeholder="Key word" id="keyword">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default" id="keygenBtn">
                                            <span class="hidden-xs hidden-sm">Generate keys</span>
                                            <span class="visible-xs visible-sm">Keygen</span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                {{ Form::label('publicKey', 'Public key:', ['class' => 'control-label']) }}
                                {{ Form::text('publicKey', null,['class' => 'form-control', 'placeholder' => 'PublicKey', 'readonly' => 'readonly']) }}
                                {{ $errors->first('publicKey', '<span class="help-block text-danger no-bottom-margin">:message</span>') }}
                            </div>
                            <div class="form-group col-xs-12 no-bottom-margin">
                                {{ Form::label('privateKey', 'Private key:', ['class' => 'control-label']) }}
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Private key" id="privateKey" readonly>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default" id="copyBtn" disabled>
                                            <i class="fa fa-clipboard"></i>&nbsp;Copy<span class="hidden-xs hidden-sm">&nbsp;to clipboard</span>
                                        </button>
                                    </span>
                                </div>
                                <span class="help-block text-primary text-center">Save your private key and do not show to anyone!</span>
                            </div>
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success pull-right" id="submitBtn" disabled>Register&nbsp;<i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </section>
            {{ Form::close() }}
        </div>
    </main>
</section>
@stop

@section('scripts')
    <script src="{{ asset('src/vendor/cryptico/cryptico.min.js') }}"></script>
    <script src="{{ asset('src/js/user.register.js') }}"></script>
@stop
