@extends('layout.simple')


@section('main')
    <section class="container" id="UserLoginMain">
        <header class="text-center">
            <img alt="Read'n'Burn" src="src/img/logo.png">
        </header>
        <main class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <form>
                    <section class="panel panel-default">
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
                        <div class="col-xs-12">
                            <button type="button" class="btn btn-default">Register</button>
                            <button type="submit" class="btn btn-success pull-right">Login</button>
                        </div>
                    </section>
                </form>
            </div>
        </main>
    </section>
@stop
