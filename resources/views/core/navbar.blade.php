<nav
    class="flex flex-row text-left justify-center py-4 px-6  bg-gray-100 items-baseline w-full transition duration-500">
    <ul class="navbar-nav inline-flex">
        <li class="nav-item mx-4">
            <a class="nav-link text-2xl font-semibold active:text-black  {{ Request::is('/') ? 'text-black' : ' text-gray-500 hover:text-gray-700' }} "
                href="/">Home</a>
        </li>
        <li class="nav-item mx-4">
            <a class="nav-link text-2xl font-semibold active:text-black  {{ Request::is('blog*') ? 'text-black' : ' text-gray-500 hover:text-gray-700' }}"
                href="/blog">Blog</a>
        </li>
    </ul>
</nav>
