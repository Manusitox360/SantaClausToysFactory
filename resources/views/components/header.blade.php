<header class="sticky top-0 bg-candy-cane p-4 z-20">
    <nav class="bg-no-repeat bg-cover bg-inherit">
        <div class="flex flex-wrap space-x-96 mx-auto max-w-screen-xl">
            <a href="{{ route('home') }}" class="flex bg-[#530402] rounded py-1 px-2 transform hover:scale-110 transition-transform">
                <img src="{{asset('img/logoHeader.png')}}" class="mr-3 h-9" alt="Flowbite Logo" />
                <span class="text-xl font-semibold whitespace-nowrap text-white pt-1">Santa Claus</span>
            </a>
            <nav class="flex justify-start space-x-8 items-center self-center">
                <a href="{{ route('santa') }}" class="bg-[#530402] text-white hover:text-[#8b191d] transition rounded p-1 py-[0.4rem] transform hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512" class="w-8 h-6">
                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96V256c0 53 43 96 96 96v32h64V352H384v32h64V352c53 0 96-43 96-96V160c17.7 0 32-14.3 32-32s-14.3-32-32-32H512 480c-17.7 0-32 14.3-32 32v41.3c0 30.2-24.5 54.7-54.7 54.7c-75.5 0-145.6-38.9-185.6-102.9l-4.3-6.9C174.2 67.6 125 37.6 70.7 32.7c-2.2-.5-4.4-.7-6.7-.7H55 32zM640 384c0-17.7-14.3-32-32-32s-32 14.3-32 32v8c0 13.3-10.7 24-24 24H64c-17.7 0-32 14.3-32 32s14.3 32 32 32H552c48.6 0 88-39.4 88-88v-8z"></path>
                </svg>
                </a>
            
                
                <a href="{{ route('elf') }}" class="bg-[#530402] text-white hover:text-green-700 transition rounded p-1 px-2 transform hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512" class="w-6 h-7">
                    <path d="M64 416L168.6 180.7c15.3-34.4 40.3-63.5 72-83.7l146.9-94c3-1.9 6.5-2.9 10-2.9C407.7 0 416 8.3 416 18.6v1.6c0 2.6-.5 5.1-1.4 7.5L354.8 176.9c-1.9 4.7-2.8 9.7-2.8 14.7c0 5.5 1.2 11 3.4 16.1L448 416H240.9l11.8-35.4 40.4-13.5c6.5-2.2 10.9-8.3 10.9-15.2s-4.4-13-10.9-15.2l-40.4-13.5-13.5-40.4C237 276.4 230.9 272 224 272s-13 4.4-15.2 10.9l-13.5 40.4-40.4 13.5C148.4 339 144 345.1 144 352s4.4 13 10.9 15.2l40.4 13.5L207.1 416H64zM279.6 141.5c-1.1-3.3-4.1-5.5-7.6-5.5s-6.5 2.2-7.6 5.5l-6.7 20.2-20.2 6.7c-3.3 1.1-5.5 4.1-5.5 7.6s2.2 6.5 5.5 7.6l20.2 6.7 6.7 20.2c1.1 3.3 4.1 5.5 7.6 5.5s6.5-2.2 7.6-5.5l6.7-20.2 20.2-6.7c3.3-1.1 5.5-4.1 5.5-7.6s-2.2-6.5-5.5-7.6l-20.2-6.7-6.7-20.2zM32 448H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path>
                </svg>
                </a> 
            </nav>
            @if (request()->routeIs('santa'))
                <button class="transition hover:scale-110 duration-500 font-bold bg-[#530402] rounded">
                    <a class="text-xl font-semibold whitespace-nowrap text-white p-4" href="{{route('santaGifts')}}">🎁Give Gifts🎁</a>
                </button>
            @endif
        </div>
    </nav>
</header>
