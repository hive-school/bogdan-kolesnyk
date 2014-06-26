@extends('layout.default')

@section('main')
<section class="container">
    <div class="row">
        <aside class="col-sm-3 col-lg-2">
            @include('partial/sidebarMenu')
        </aside>
        <main class="col-sm-9 col-lg-10" id="userMessagesMain">
            {{ Form::open(['route' => 'message.store']) }}
                <section class="panel panel-default">
                    <header class="panel-heading no-bottom-padding">
                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                {{ Form::label('receiver', 'To:', ['class' => 'control-label']) }}
                                {{
                                    Form::select('receiver',
                                        array_merge(['default' => 'Select receiver'],['A' => 'AA', 'B' => 'BB']),
                                        'default',
                                        ['class' => 'form-control', 'placeholder' => 'Select receiver']
                                    )
                                }}
                            </div>
                            <div class="form-group col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                {{ Form::label('subject', 'Subject:', ['class' => 'control-label']) }}
                                <input type="text" class="form-control" placeholder="Message subject">
                            </div>
                        </div>
                    </header>
                    <article class="panel-body no-bottom-padding">
                        <div class="form-group">
                            {{ Form::label('message', 'Message:', ['class' => 'control-label']) }}
                            {{ Form::textarea('message', null, ['class' => 'wysiwyg']) }}
                        </div>
                        <div class="form-group">
                            <label class="control-label hidden-xs">Encrypted message:</label>
                            <section class="well" id="encryptedMsgPreview">
                                OOHoAlfm6Viyl7afkUVRoYQv24AfdLnxaay5GjcqpxvEK+dph5kUFZEZIFKo
                                vVoHoZbtUMekSbMqHQr3wNNpvcNWr4E3DgNLfMZQA1pCAUVmPjNM1ZQmrkKY
                                HPKvkhmVKaBiYAJGoO/YiFfKnaylLpKOYJZctkZc4wflZcEEqqg=?cJPt71I
                                HcU5c2LgqGXQKcx2BaAbm25Q2Ku94c933LX5MObL9qbTJEVEv29U0C3gIqcd
                                qwMV6nl33GtHjyRdHx5fZcon21glUKIbE9P71NwQ=
                            </section>
                        </div>
                    </article>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-xs-3">
                                <button type="reset" class="btn btn-default">
                                    <i class="fa fa-undo"></i>&nbsp;Reset
                                </button>
                            </div>
                            <div class="col-xs-9 text-right">
                                <a href="#" class="btn btn-info">
                                    <i class="fa fa-eye"></i>&nbsp;Preview
                                </a>
                                <a href="#" class="btn btn-success">
                                    <i class="fa fa-send"></i>&nbsp;Send
                                </a>
                            </div>
                    </footer>
                </section>
            </form>
        </main>
    </div>
</section>
@stop

@section('scripts')
    <script src="{{ asset('src/js/message.create.js') }}"></script>
@stop