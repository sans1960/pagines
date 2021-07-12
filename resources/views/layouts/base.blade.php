<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </head>
    <body>
        <nav
        class="flex flex-wrap items-center justify-between w-full p-6"
        x-data="{ isOpen: false }"
        @keydown.escape="isOpen = false"
        :class="{ 'shadow-lg bg-gradient-to-r from-green-400 to-blue-500' : isOpen , 'bg-gradient-to-r from-green-400 to-blue-500' : !isOpen}"
      >
        <!--Logo etc-->
        <div class="flex items-center flex-shrink-0 mr-6 text-white">
          <a
            class="text-4xl font-bold text-white no-underline"
            href="#"
          >
             Págines
          </a>
        </div>

        <!--Toggle button (hidden on large screens)-->
        <button
          @click="isOpen = !isOpen"
          type="button"
          class="block px-2 text-white lg:hidden hover:text-white focus:outline-none focus:text-white"
          :class="{ 'transition transform-180': isOpen }"
        >
          <svg
            class="w-6 h-6 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
          >
            <path
              x-show="isOpen"
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
            />
            <path
              x-show="!isOpen"
              fill-rule="evenodd"
              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
            />
          </svg>
        </button>

        <!--Menu-->
        <div
          class="flex-grow w-full lg:flex lg:items-center lg:w-auto"
          :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
          @click.away="isOpen = false"
          x-show.transition="true"
        >
          <ul
            class="items-center justify-end flex-1 pt-6 lg:pt-0 list-reset lg:flex"
          >
            <li class="mr-3">
              <a
                class="inline-block px-4 py-2 italic text-white no-underline "
                href="{{ route('home') }}"
                @click="isOpen = false"
                >Home
              </a>
            </li>
            <li class="mr-3">
              <a
                class="inline-block px-4 py-2 italic text-white no-underline "
                href="{{ route('gallery') }}"
                @click="isOpen = false"
                >Gallery
              </a>
            </li>
            <li class="mr-3">
              <a
                class="inline-block px-4 py-2 italic text-white no-underline"
                href="{{ route('services') }}"
                @click="isOpen = false"
                >Services
              </a>
            </li>
            <li class="mr-3">
              <a
                class="inline-block px-4 py-2 italic text-white no-underline"
                href="{{ route('contact') }}"
                @click="isOpen = false"
                >Contact
              </a>
            </li>
          </ul>
        </div>
      </nav>
      @yield('content')

<footer class="flex flex-row items-center justify-between p-6 bg-gradient-to-r from-green-400 to-blue-500">
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
              </svg>
        </a>
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 text-white w--10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
        </a>
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
        </a>
</footer>
    </body>
</html>
