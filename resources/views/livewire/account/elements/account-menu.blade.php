<nav class="jobplugin__settings-menu">
    <a href="#" class="jobplugin__settings-close">
        <span class="jobplugin__bg-primary"></span>
        <span class="jobplugin__bg-primary"></span>
    </a>
    <ul>
        <li class="active"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('parking') }}">Parking</a></li>
        <li><a href="{{ route('transactions') }}">Transactions</a></li>
        <li><a href="javascript:void(0);">Profile</a></li>
        <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
