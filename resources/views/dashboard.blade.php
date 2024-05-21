
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link rel="stylesheet" href="./output.css">
    </head>
    <body class="antialiased">
        <section>
            <header>
                <div class="bg-white border-b border-gray-100">
                    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                        <div class="flex items-center justify-between h-16 lg:h-[72px]">
                            <button type="button" class="p-2 -m-2 text-gray-900 transition-all duration-200 lg:hidden hover:text-gray-700">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>

                            <div class="flex items-center flex-shrink-0 ml-4 lg:ml-0">
                                <a href="#" title="" class="inline-flex rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                    <span class="sr-only"> Rareblocks logo </span>
                                    <img class="w-auto h-8" src="" alt="The Grocery Store" />
                                </a>
                            </div>

                            <div class="flex items-center justify-end ml-auto">
                                @if (Route::has('login'))
                                <div class="hidden lg:flex lg:items-center lg:space-x-8">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Create Account</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif

                                <div class="flex items-center justify-end space-x-5">
                                    <span class="hidden w-px h-6 bg-gray-200 lg:block" aria-hidden="true"></span>

                                    <button type="button" class="p-2 -m-2 text-gray-900 transition-all duration-200 hover:text-gray-700">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>

                                    <span class="w-px h-6 bg-gray-200 lg:hidden" aria-hidden="true"></span>

                                    <button type="button" class="inline-flex items-center p-2 -m-2 text-gray-900 transition-all duration-200 lg:ml-6 hover:text-gray-700">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                        <span class="inline-flex items-center justify-center w-5 h-5 ml-1 text-xs font-bold text-white bg-gray-600 rounded-full"> </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="relative pt-12 bg-gray-50 sm:pt-16 lg:py-36 xl:py-48">
                <div class="absolute inset-0 hidden lg:block">
                    <img class="object-cover object-right w-full h-full" src="{{ asset('ui-data/images/background-image-3.jpg') }}" alt="" />
                </div>

                <div class="absolute inset-x-0 top-0 hidden lg:block">
                    <div class="py-5">
                        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                            <nav class="flex items-center space-x-8">
                                <a href="#" title="" class="text-sm font-medium text-gray-900 transition-all duration-200 rounded hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Get All </a>

                                <a href="#" title="" class="text-sm font-medium text-gray-900 transition-all duration-200 rounded hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Dairy </a>

                                <a href="#" title="" class="text-sm font-medium text-gray-900 transition-all duration-200 rounded hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Vegetables </a>

                                <a href="#" title="" class="text-sm font-medium text-gray-900 transition-all duration-200 rounded hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Fruits </a>

                                <a href="#" title="" class="text-sm font-medium text-gray-900 transition-all duration-200 rounded hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Spices </a>

                                <a href="#" title="" class="text-sm font-medium text-gray-900 transition-all duration-200 rounded hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Frozen Foods </a>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-lg mx-auto text-center lg:mx-0 lg:max-w-md lg:text-left">
                        <p class="text-base font-bold text-gray-600">Get a discount of 40 Ghana Cedis for mobile money purchase</p></p>
                        <h1 class="mt-3 text-4xl font-bold text-gray-900 sm:mt-8 sm:text-5xl xl:text-7xl">Order your Groceries online here</h1>

                        <div class="mt-8 sm:mt-12">
                            <a
                                href="#"
                                title=""
                                class="
                                    inline-flex
                                    items-center
                                    justify-center
                                    px-8
                                    py-3
                                    text-base
                                    font-bold
                                    leading-7
                                    text-white
                                    transition-all
                                    duration-200
                                    bg-gray-900
                                    border border-transparent
                                    rounded-md
                                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900
                                    hover:bg-gray-600
                                    focus:ring-offset-[#FFE942]
                                "
                                role="button"
                            >
                                Start shopping
                            </a>
                        </div>
                    </div>

                    <div class="mt-8 lg:hidden">
                        <img class="w-full mx-auto" src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/hero/4/bg.png" alt="" />
                    </div>
                </div>
            </div>
        </section>



    </body>
</html>
