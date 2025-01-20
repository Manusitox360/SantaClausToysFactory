@extends('layouts.index')
@section('content')
<section class="flex flex-col items-center justify-center overflow-auto h-[742px] md:h-[920px] xl:h-[829px]">
    <div class="flex justify-center items-center flex-col text-center">
        <h1 class="text-4xl font-bold text-white p-2 z-10">🎅 Welcome to Santa Claus Toys Factory! 🎁</h1>
        <p class="text-lg text-white">
            From the heart of the North Pole, Father Christmas and his faithful elves work tirelessly to make this Christmas an unforgettable moment. 
            <br>
            Here, in the Magic Workshop, they create the toys
            that will make millions of children around the world smile.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-10 sm:gap-12 md:gap-24 py-4 h-full ">
            <a href="{{ route('santa') }}">
                <button class="flex h-[470px] flex-col items-center justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[19rem] w-[18rem]">
                    <div class="items-center font-bold text-3xl">
                        <img class="h-[14rem] w-[13rem]" src="img/GitanoSupremo.png" alt="" />
                    </div>
                    <div>
                        @include('components.kidCount')
                    </div>
                </button>
            </a>
            <a href="{{ route('elf') }}"> 
                <button class="flex h-full flex-wrap items-center justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[19rem] w-[18rem]">
                    <div class="items-center font-bold text-3xl">
                        <img class="pl-6 h-[13rem] w-[13rem]" src="img/Gitanillo.png" alt=""/>
                    </div>
                    <div>
                        @include('components.toyCount')
                    </div>
                </button>
            </a>
        </div>
    </div>
</section>
@endsection


