<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <a class="text-5xl font-bold leading-none" href="#">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap whitespace-nowrap">IT By TRUT</span>
                </a>


                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex justify-between items-center w-full">
                    <div class="space-x-8 items-center">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('brand.index')" :active="request()->routeIs('brand.index')">
                            {{ __('Brand') }}
                        </x-nav-link>
                        <x-nav-link :href="route('category.index')" :active="request()->routeIs('category.index')">
                            {{ __('Category') }}
                        </x-nav-link>
                        <x-nav-link :href="route('products.list')" :active="request()->routeIs('products.list')">
                            {{ __('Products') }}
                        </x-nav-link>
                        <x-nav-link>
                            <form action="/search">
                                <div class="form-group font-semibold text-gray-900">
                                    <div class="relative"><input class="block w-full rounded-lg appearance-none bg-transparent py-1.5 pl-4 pr-12 text-base text-slate-900 placeholder:text-slate-600 focus:outline-offset-4 sm:text-sm sm:leading-6" 
                                        name="query" placeholder="Find anything..." aria-label="Search components" id="headlessui-combobox-input-22" role="combobox" type="text" aria-expanded="false" aria-autocomplete="list" data-headlessui-state="" value="" style="caret-color: rgb(107, 114, 128);" tabindex="0">
                                        <svg class="pointer-events-none absolute right-4 top-1.5 h-6 w-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.47 21.53a.75.75 0 1 0 1.06-1.06l-1.06 1.06Zm-9.97-4.28a6.75 6.75 0 0 1-6.75-6.75h-1.5a8.25 8.25 0 0 0 8.25 8.25v-1.5ZM3.75 10.5a6.75 6.75 0 0 1 6.75-6.75v-1.5a8.25 8.25 0 0 0-8.25 8.25h1.5Zm6.75-6.75a6.75 6.75 0 0 1 6.75 6.75h1.5a8.25 8.25 0 0 0-8.25-8.25v1.5Zm11.03 16.72-5.196-5.197-1.061 1.06 5.197 5.197 1.06-1.06Zm-4.28-9.97c0 1.864-.755 3.55-1.977 4.773l1.06 1.06A8.226 8.226 0 0 0 18.75 10.5h-1.5Zm-1.977 4.773A6.727 6.727 0 0 1 10.5 17.25v1.5a8.226 8.226 0 0 0 5.834-2.416l-1.061-1.061Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </form>
                        </x-nav-link>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <a href="/orderlist"> &nbsp;&nbsp;&nbsp; My Order</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </div>

                    <a href="{{ route('cart.list') }}" class="flex items-center space-x-1">
                        <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><circle cx="13.5" cy="29.5" r="2.5" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><circle cx="26.5" cy="29.5" r="2.5" fill="currentColor" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="M33.1 6.39a1 1 0 0 0-.79-.39H9.21l-.45-1.43a1 1 0 0 0-.66-.65L4 2.66a1 1 0 1 0-.59 1.92L7 5.68l4.58 14.47l-1.63 1.34l-.13.13A2.66 2.66 0 0 0 9.74 25A2.75 2.75 0 0 0 12 26h16.69a1 1 0 0 0 0-2H11.84a.67.67 0 0 1-.56-1l2.41-2h15.43a1 1 0 0 0 1-.76l3.2-13a1 1 0 0 0-.22-.85Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                       <span class="text-gray-700">{{ Cart::getTotalQuantity()}}</span> 
                    </a>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>
    
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
    
                    <x-slot name="content">
                        <!-- Authentication -->
                        <a href="/orderlist"> &nbsp;&nbsp;&nbsp; My Order</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
    
                            <x-dropdown-link :href="route('index2')" :active="request()->routeIs('index2')">
                                {{ __('ค่ารวมของสินค้าแต่ละยี่ห้อ') }}
                            </x-dropdown-link>
    
                            <x-dropdown-link :href="route('index1')" :active="request()->routeIs('index1')">
                                {{ __('จำนวนสินค้าจากยี่ห้อสินค้า') }}
                            </x-dropdown-link>
    
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>