@extends('layout.simple')

@section('main')
    <section class="container" id="UserLoginMain">
        <main class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <form>
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
                                    <label class="control-label">Email:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">Password:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <input type="password" class="form-control" name="password" value="" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <a href="{{ asset('register') }}" class="btn btn-default">Register</a>
                                    <button type="submit" class="btn btn-success pull-right">Login&nbsp;<i class="fa fa-sign-in"></i></button>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </main>
    </section>
@stop
