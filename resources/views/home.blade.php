@extends('layouts.index')
@section('content')
<section class="flex flex-col items-center justify-center overflow-auto">
    <div class="flex justify-center items-center flex-col text-center">
        <h1 class="text-4xl font-bold text-white p-2">🎅 Welcome to Santa Claus Toys Factory! 🎁</h1>
        <p class="text-lg text-white">
            From the heart of the North Pole, Father Christmas and his faithful elves work tirelessly to make this Christmas an unforgettable moment. 
            <br>
            Here, in the Magic Workshop, they create the toys
            that will make millions of children around the world smile.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-24 pt-7 pb-4 h-full ">
            <a href="{{ route('santa') }}">
                <button class="flex items-center justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[19rem] w-[18rem]">
                <div class="font-bold text-3xl">
                    <img class="h-[14rem] w-[13rem]" src="img/GitanoSupremo.png" alt="" />
                </div>
                </button>
            </a>
            <a href="{{ route('elf') }}"> 
                <button class="flex items-center justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[19rem] w-[18rem]">
                <div class="items-center font-bold text-3xl">
                    <img class="pl-6 h-[13rem] w-[13rem]" src="img/Gitanillo.png" alt="" />
                </div>
                </button>
            </a>
        </div>
    </div>
    <div class="flex flex-wrap space-x-[6rem] pb-[1.8rem]">
        <div class="bg-[#ffffff80] rounded-lg">
            <h2 class="text-xl font-semibold text-center text-white">{{ $chart->options['chart_title'] }}</h2>
            <div class="flex justify-center items-center w-[18rem]">{!! $chart->renderHtml() !!}</div>
            <div class="text-center text-base font-semibold text-white">Total Kids: {{$totalKids}}</div>
        </div>
        <div class="bg-[#ffffff80] rounded-lg">
            <h2 class="text-xl font-semibold text-center text-white">{{ $chart2->options['chart_title'] }}</h2>
            <div class="flex justify-center items-center w-[18rem]">{!! $chart2->renderHtml() !!}</div>
            <div class="text-center text-base font-semibold text-white">Total Toys: {{$totalToys}} {{-- {{$ageRanges}} --}}</div>
        </div>
    </div>
</section>
@section('script')
{!! $chart->renderChartJsLibrary() !!}
{!! $chart->renderJs() !!}
{!! $chart2->renderChartJsLibrary() !!}
{!! $chart2->renderJs() !!}
@endsection
@endsection


