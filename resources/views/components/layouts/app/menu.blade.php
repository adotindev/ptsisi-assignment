<nav class="bg-gray-800 text-white px-4 py-2">
    <ul class="flex space-x-4">
        <li>
            <a href="{{ route('dashboard') }}"
               class="{{ request()->routeIs('dashboard') ? 'font-bold underline' : '' }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('profile') }}"
               class="{{ request()->routeIs('profile') ? 'font-bold underline' : '' }}">
                Profile
            </a>
        </li>
        <li>
            <a href="{{ route('settings') }}"
               class="{{ request()->routeIs('settings') ? 'font-bold underline' : '' }}">
                Settings
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </li>
    </ul>
</nav>Q
