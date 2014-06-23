@extends('layout.default')

@section('main')
<section class="container">
    <div class="row">
        <aside class="col-sm-3 col-lg-2">
            @include('partial/sidebarMenu')
        </aside>
        <main class="col-sm-9 col-lg-10" id="userMessagesMain">
            <section class="panel panel-warning">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label">Private key:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="text" class="form-control"></input>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success pull-right">
                        <i class="fa fa-unlock"></i>&nbsp;Decrypt
                    </a>
                </div>
            </section>
            <section class="panel panel-default">
                <header class="panel-heading">
                    <h1 class="panel-title">Message title</h1>
                </header>
                <article class="panel-body">

                </article>
                <footer class="panel-footer text-right">
                    <a href="#" class="btn btn-primary">
                        <i class="fa fa-reply"></i>&nbsp;Reply
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="fa fa-trash-o"></i>&nbsp;Delete
                    </a>
                </footer>
            </section>
        </main>
    </div>
</section>
@stop