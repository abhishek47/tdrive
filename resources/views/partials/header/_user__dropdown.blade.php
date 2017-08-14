 @if(Auth::check())

 <li class="dropdown dropdown-usermenu">
    <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <div class="user-avatar"><img src="imgs/avatar.png" alt="..."></div>
        <span class="hidden-sm hidden-xs">{{ auth()->user()->name }}</span>
        <!--<i class="fa fa-angle-down"></i>-->
        <span class="caret hidden-sm hidden-xs"></span>
    </a>
    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
        <li><a href="#"><i class="fa fa-cogs"></i>  Settings</a></li>
        <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
        <li><a href="#"><i class="fa fa-life-ring"></i>  Help</a></li>
        <li class="divider"></li>
         <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> Log Out
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>


@else

<li><a href="{{ route('login') }}">Login</a></li>

<li><a href="{{ route('login') }}">Register</a></li>



@endif