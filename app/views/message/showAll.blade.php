@extends('layout.default')

@section('main')
<section class="container">
    <div class="row">
        <aside class="col-sm-3 col-lg-2">
            @include('partial/sidebarMenu')
        </aside>
        <main class="col-sm-9 col-lg-10" id="userMessagesMain">
            <section class="panel panel-default">
                <header class="panel-heading">
                    <h1 class="panel-title">All messages:</h1>
                </header>
                <article class="panel-body no-top-padding no-bottom-padding">
                    <ul class="list-unstyled no-bottom-margin">

                        <li class="row message-row">
                            <a href="#" class="col-xs-10">
                                <h4 class="message-title">
                                    <i class="fa fa-arrow-circle-right"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </h4>
                            </a>
                            <div class="col-xs-2 text-right message-del-btn">
                                <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i><span class="hidden-xs">&nbsp;Del<span class="hidden-sm">ete</span></span></a>
                            </div>
                        </li>

                    </ul>
                </article>
                <footer class="panel-footer">
                    Tttt
                </footer>
            </section>
        </main>
    </div>
</section>
@stop