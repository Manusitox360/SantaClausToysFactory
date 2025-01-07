@extends('layouts.index')

@section('content')
<section class="flex items-center justify-center h-[28.8rem]">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-white p-2">🎅 Welcome to Santa Claus Toys Factory! 🎁</h1>
        <p class="text-lg text-white">
            From the heart of the North Pole, Father Christmas and his faithful elves work tirelessly to make this Christmas an unforgettable moment. 
            <br>
            Here, in the Magic Workshop, they create the toys
            that will make millions of children around the world smile.
        </p>

        <!-- Contador de niños buenos y malos -->
        <div class="mt-6 text-white">
            <p class="text-2xl font-semibold">📊 Kids Summary:</p>
            <p class="text-lg">👶 Total Kids: <span class="font-bold">{{ $totalKids }}</span></p>
            <p class="text-lg">😊 Good Kids: <span class="font-bold">{{ $goodKids }}</span></p>
            <p class="text-lg">😈 Bad Kids: <span class="font-bold">{{ $badKids }}</span></p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-24 pt-7 pb-8 h-full ">
            <a href="{{ route('santa') }}">
                <button class="flex justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[17rem] w-[18rem]">
                    <div class="font-bold text-3xl">
                        <img class="h-[13rem] w-[13rem]" src="img/GitanoSupremo.png" alt="" />
                    </div>
                </button>
            </a>
            <a href="{{ route('elf') }}">
                <button class="flex justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[17rem] w-[18rem]">
                    <div class="font-bold text-3xl">
                        <img class="pl-3 h-[13rem] w-[13rem]" src="img/Gitanillo.png" alt="" />
                    </div>
                </button>
            </a>
        </div>
    </div>
</section>
@endsection
