<nav class="p-6 bg-gray-800 text-gray-300 flex justify-between">
    <ul class="flex items-center">

        <li>
            <a href="/" class="px-2 py-3 mx-1">
                Home
            </a>
        </li>

        <li>
            <a href="/dashboard" class="px-2 py-3 mx-1">
                Dashboard
            </a>
        </li>
    </ul>

    <ul class="flex items-center">

        <li>
            <a href="/about" class="px-2 py-3 mx-1">
                About
            </a>
        </li>

        <li>
            <a href="/services" class="px-2 py-3 mx-1">
                Services
            </a>
        </li>

        <li>
            <a href="/faq" class="px-2 py-3 mx-1">
                FAQ
            </a>
        </li>

        <li>
            <a href="/blog" class="px-2 py-3 mx-1">
                Blog
            </a>
        </li>

        {{-- @if (auth()->guard('admin')->check()) --}}
            <li>
                {{-- <a href="#" class="px-2 py-3 mx-1">{{ auth()->user()->name }}</a> --}}
            </li>

            <li>
                {{-- <form action="{{ route('admin.logout') }}" method="post" class="inline"> --}}
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>

        {{-- @else --}}
            <li>
                {{-- <a href="{{ route('admin.auth') }}" class="px-2 py-3 mx-1">Login</a> --}}
            </li>
            <li>
                <a href="" class="px-2 py-3 mx-1">Register</a>
            </li>
        {{-- @endif --}}
    </ul>
</nav>


