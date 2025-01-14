@extends('layouts.index')
@section('content')
<div class="flex justify-center items-center pt-6">
    <a href="{{route('santaGifts')}}"><button class="bg-candy-cane px-4 py-2 rounded-lg uppercase transform hover:scale-110 duration-500 font-bold">Give Gifts</button></a>
</div>
<div class="flex flex-wrap py-8 gap-[6rem] items-center justify-center">
    @foreach ($listOfGifts as $gifts)
        @php
            $kid = $gifts[0];
            $listOfToys = $gifts[1];
        @endphp
        <div class="w-[20rem] bg-[#ffffff80] border border-gray-200 rounded-lg shadow">
            <div class="flex flex-col min-h-[20rem] max-h-[20rem] items-center pt-8">
                <a href="{{route('santaShow', $kid->id)}}"><img class="w-24 h-24 mb-3 rounded-full shadow-lg hover:scale-110 transition duration-500 object-cover" src="{{$kid->image}}" alt="Kid Images"/></a>
                <h5 class="text-xl px-12 uppercase font-bold text-black border-b border-black ">{{$kid->name}}</h5>
                @foreach ($listOfToys as $toy)
                <div class="flex flex-col items-center justify-center text-center pt-4 pb-2 px-[2rem] text-sm w-full">
                    <a href="{{route('elfShow', $toy->id)}}" class="hover:scale-110 transition duration-500 uppercase font-bold text-gray-800">{{$toy->name}} - ({{$toy->toyType->associated->name}})</a>
                </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection