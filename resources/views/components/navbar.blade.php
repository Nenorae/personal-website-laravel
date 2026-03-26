<nav x-data="{ open: false }" class="navbar-blur sticky top-0 z-50 border-b border-gray-200/20">
    <div class="container mx-auto max-w-6xl px-4 sm:px-6">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <span class="text-xl font-bold text-gray-800">Ganendra</span>
                    <span class="ml-2 text-sm text-gray-500">Web3 Developer</span>
                </a>
            </div>

            <div class="hidden md:flex space-x-8">
                @foreach ($navLinks as $link)
                <a href="{{ $link['route'] }}"
                    @class([ 'font-medium transition-colors' , 'text-blue-600 border-b-2 border-blue-600'=> request()->is(ltrim($link['route'], '/')),
                    'text-gray-600 hover:text-blue-600' => !request()->is(ltrim($link['route'], '/'))
                    ])>
                    {{ $link['name'] }}
                </a>
                @endforeach
            </div>

            <div class="md:hidden">
                <button @click="open = !open" id="mobile-menu-btn" class="text-gray-600 hover:text-gray-900 focus:outline-none" :aria-expanded="open.toString()" aria-controls="mobile-menu">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2"
            id="mobile-menu" class="md:hidden pb-4" style="display: none;">
            <div class="flex flex-col space-y-3">
                @foreach ($navLinks as $link)
                <a href="{{ $link['route'] }}"
                    @class([ 'font-medium transition-colors block px-2 py-1' , 'text-blue-600 bg-blue-50 rounded-md'=> request()->is(ltrim($link['route'], '/')),
                    'text-gray-600 hover:text-blue-600' => !request()->is(ltrim($link['route'], '/'))
                    ])>
                    {{ $link['name'] }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</nav>