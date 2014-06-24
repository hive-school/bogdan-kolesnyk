@extends('layout.default')

@section('main')
<section class="container">
    <div class="row">
        <aside class="col-sm-3 col-lg-2">
            @include('partial/sidebarMenu')
        </aside>
        <main class="col-sm-9 col-lg-10" id="userMessagesMain">
            <form>
                <section class="panel panel-default">
                    <header class="panel-heading no-bottom-padding">
                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <label class="control-label hidden-xs">To:</label>
                                <select class="form-control">
                                    <option disabled selected>Choose receiver</option>
                                    <option><i class="fa fa-user">&nbsp;Mr.Black</option>
                                    <option><i class="fa fa-user">&nbsp;Mr.Green</option>
                                    <option><i class="fa fa-user">&nbsp;Mr.Yellow</option>
                                    <option><i class="fa fa-user">&nbsp;Mr.Lime</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                <label class="control-label hidden-xs">Subject:</label>
                                <input type="text" class="form-control" placeholder="Message subject">
                            </div>
                        </div>
                    </header>
                    <article class="panel-body no-bottom-padding">
                        <div class="form-group">
                            <label class="control-label hidden-xs">Message:</label>
                            <textarea class="form-control wysiwyg"></textarea>
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