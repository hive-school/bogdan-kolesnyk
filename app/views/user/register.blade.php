@extends('layout.simple')

@section('main')
<section class="container" id="UserLoginMain">
    <main class="row">
        <div class="col-xs-12 col-lg-10 col-lg-offset-1">
            <form>
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
                                <label class="control-label">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                <label class="control-label" >Username:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" value="" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                <label class="control-label">Password:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" value="" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                <label class="control-label">Confirm password:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="passwordConfirm" value="" placeholder="Confirm password" required>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label class="control-label">
                                    Key word:
                                </label>
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
                                <label class="control-label">
                                    Public key:
                                </label>
                                <input type="text" class="form-control" value="" placeholder="Public key" id="publicKey" name="publicKey" required readonly>
                            </div>
                            <div class="form-group col-xs-12 no-bottom-margin">
                                <label class="control-label">
                                    Private key:
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Private key" id="privateKey" readonly>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default" id="copyBtn" disabled>
                                            <i class="fa fa-clipboard"></i>&nbsp;Copy<span class="hidden-xs hidden-sm">&nbsp;to clipboard</span>
                                        </button>
                                    </span>
                                </div>
                                <span class="help-block text-danger text-center">Save your private key and do not show to anyone!</span>
                            </div>
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success pull-right" disabled>Register&nbsp;<i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </main>
</section>
@stop

@section('scripts')
    <script src="{{ asset('src/vendor/cryptico/cryptico.min.js') }}"></script>
    <script src="{{ asset('src/js/user.register.js') }}"></script>
@stop
