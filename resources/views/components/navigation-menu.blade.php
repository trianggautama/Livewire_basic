<div class="navbar bg-light-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-light-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
            <x-nav-link :active="request()->routeIs('home')" :href="Route('home')">Home</x-nav-link>
            <x-nav-link :active="request()->routeIs('about')" :href="Route('about')">About</x-nav-link>
            <x-nav-link :active="request()->routeIs('contact')" :href="Route('contact')">Contact</x-nav-link>
            <x-nav-link :active="request()->routeIs('post.*')" :href="Route('post.index')">Posts</x-nav-link>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl">daisyUI</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
        <x-nav-link :active="request()->routeIs('home')" :href="Route('home')">Home</x-nav-link>
        <x-nav-link :active="request()->routeIs('about')" :href="Route('about')">About</x-nav-link>
        <x-nav-link :active="request()->routeIs('contact')" :href="Route('contact')">Contact</x-nav-link>
        <x-nav-link :active="request()->routeIs('post.*')" :href="Route('post.index')">Posts</x-nav-link>
    </ul>
  </div>
</div>