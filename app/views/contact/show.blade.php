@extends('layout.default')

@section('main')
<section class="container">
    <div class="row">
        <aside class="col-sm-3 col-lg-2">
            @include('partial/sidebarMenu')
        </aside>
        <main class="col-sm-9 col-lg-10" id="userMessagesMain">
            {{ Auth::user()->id }}
            <section class="panel panel-default">
                <header class="panel-heading no-bottom-padding">
                    <div class="row">
                        {{ Form::open(['route' => 'contact.store']) }}
                        <div class="form-group col-xs-12">
                            {{ Form::label('contactEmail', 'Contact persons email:', ['class' => 'control-label']) }}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                {{ Form::email('contactEmail', null, ['class' => 'form-control', 'placeholder' => 'desired.contact@example.com', 'required' => 'required']) }}
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-chain"></i>&nbsp;Contact</button>
                                </span>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </header>
                <article class="panel-body no-bottom-padding">
                    users
                </article>
            </section>

        </main>
    </div>
</section>
@stop

@section('scripts')
<script src="{{ asset('src/js/message.create.js') }}"></script>
@stop