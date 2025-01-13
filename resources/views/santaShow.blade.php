@extends('layouts.index')
@section('content')

<div class="p-4 gap-[6rem] flex flex-wrap items-center justify-center">
    <div class="m-4 w-full bg-[#ffffff80] border border-gray-200 rounded-lg shadow">
        <h5 class="text-xl text-center uppercase font-bold text-black border-b border-black p-4">
            {{$kid->name}} {{$kid->surname}}
        </h5>
        <div class="flex flex-row justify-between items-center p-4">
            <img 
                class="w-[18rem] h-[16.9rem] m-4 rounded-lg shadow-lg" 
                src="{{$kid->image}}" 
                alt="Kid Image"
            />
            <div class="flex flex-col justify-center items-center flex-grow">
                <div class="flex gap-[2rem] flex-col items-center pt-4 ">
                    <span class="text-center text-xl font-medium text-black">
                        Age: {{$kid->age}} years
                    </span>
                    <span class="text-center text-xl font-medium text-black">
                        Gender: {{-- {{$kid->gender->name}} --}}
                    </span>
                    <span class="text-center text-xl font-medium text-black">
                        Attitude: {{$kid->attitude}}
                    </span>
                    <button class="transition hover:scale-110 duration-500 uppercase font-bold bg-candy-cane rounded-lg px-4 py-2">
                        <a href="{{route('santa')}}">Go Back</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection