@extends('layout.default')

@section('main')
<section class="container">
    <div class="row">
        @include('partial/sidebarMenu')
        <main class="col-sm-9 col-md-10" id="userMessagesMain">
            <ul class="list-unstyled">
                <li class="row">
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <h4>Message fom User1</h4>
                    </div>
                    <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-0 col-md-2">
                        <div class="btn-group btn-group-sm btn-group-justified">
                            <a class="btn btn-default"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </li>
                <li class="row">
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <h4>Message fom User1</h4>
                    </div>
                    <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-0 col-md-2">
                        <div class="btn-group btn-group-sm btn-group-justified">
                            <a class="btn btn-default"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </li>
                <li class="row">
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <h4>Message fom User1</h4>
                    </div>
                    <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-0 col-md-2">
                        <div class="btn-group btn-group-sm btn-group-justified">
                            <a class="btn btn-default"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </main>
    </div>
</section>
@stop