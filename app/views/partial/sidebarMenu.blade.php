<div class="row">
    <section class="panel panel-default" id="sidebarMenu">
        <div class="col-xs-12">
            <img class="img-responsive" src="/src/img/logo.png" alt="Read'n'Burn">
            <div class="username">
                <i class="fa fa-user"></i><span>{{ Auth::user()->username }}</span>
            </div>
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ asset('message/create') }}" class="text-danger"><i class="fa fa-pencil"></i><span>Write a message</span></a></li>
                <li><a href="{{ asset('/') }}"><i class="fa fa-envelope"></i><span>Messages</span></a></li>
                <li><a href="{{ asset('contacts') }}"><i class="fa fa-users"></i><span>Contacts</span></a></li>
                <li><a href="{{ asset('settings') }}"><i class="fa fa-gears"></i><span>Settings</span></a></li>
                <li><a href="{{ asset('logout') }}"><i class="fa fa-sign-out"></i><span>Exit</span></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </section>
</div>