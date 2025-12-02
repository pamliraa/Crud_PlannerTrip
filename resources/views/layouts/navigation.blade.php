<nav x-data="{ open: false }" 
     class="border-b"
     style="background-color: #4180ab; color: #ffffff;">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto text-white" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    <x-nav-link 
                        :href="route('dashboard')" 
                        :active="request()->routeIs('dashboard')"
                        class="text-white hover:text-[#bdd1de]"
                    >
                        Dashboard
                    </x-nav-link>

                    <x-nav-link 
                        :href="route('destinos.index')" 
                        :active="request()->routeIs('destinos.*')"
                        class="text-white hover:text-[#bdd1de]"
                    >
                        Destinos
                    </x-nav-link>

                    <x-nav-link 
                        :href="route('diarios.index')" 
                        :active="request()->routeIs('diarios.*')"
                        class="text-white hover:text-[#bdd1de]"
                    >
                        Diários
                    </x-nav-link>

                    <x-nav-link 
                        :href="route('orcamentos.index')" 
                        :active="request()->routeIs('orcamentos.*')"
                        class="text-white hover:text-[#bdd1de]"
                    >
                        Orçamentos
                    </x-nav-link>

                    <x-nav-link 
                        :href="route('checklists.index')" 
                        :active="request()->routeIs('checklists.*')"
                        class="text-white hover:text-[#bdd1de]"
                    >
                        Checklist
                    </x-nav-link>

                    <x-nav-link 
                        :href="route('atividades.index')" 
                        :active="request()->routeIs('atividades.*')"
                        class="text-white hover:text-[#bdd1de]"
                    >
                        Atividades
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button 
                            class="inline-flex items-center px-3 py-2 border border-transparent 
                                   text-sm leading-4 font-medium rounded-md 
                                   bg-[#5a94be] text-white 
                                   hover:bg-[#6aa5cf] transition">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4 text-white" 
                                     xmlns="http://www.w3.org/2000/svg" 
                                     viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" 
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                                          clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" 
                        class="inline-flex items-center justify-center p-2 rounded-md 
                               text-white hover:bg-[#5a94be] transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" 
                              class="inline-flex" stroke-linecap="round" 
                              stroke-linejoin="round" stroke-width="2" 
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" 
                              class="hidden" stroke-linecap="round" 
                              stroke-linejoin="round" stroke-width="2" 
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-[#5a94be] text-white">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link 
                :href="route('dashboard')" 
                :active="request()->routeIs('dashboard')"
                class="text-white hover:text-[#bdd1de]">
                Dashboard
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings -->
        <div class="pt-4 pb-1 border-t border-[#bdd1de]">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-[#e4ebf0]">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white hover:text-[#bdd1de]">
                    Profile
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link 
                        :href="route('logout')"
                        class="text-white hover:text-[#bdd1de]"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Log Out
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
