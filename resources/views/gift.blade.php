@extends('layouts.index')
@section('content')
<div class="flex justify-center items-center pt-6">
    <button class="bg-candy-cane px-4 py-2 rounded-lg uppercase transform hover:scale-110 duration-500 font-bold">Give Gifts</button>
</div>
<div class="py-8 gap-[6rem] flex flex-wrap items-center justify-center">
    <div class="w-[20rem] bg-[#ffffff80] border border-gray-200 rounded-lg shadow">
        <div class="flex flex-col items-center pt-8">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg hover:scale-110 transition duration-500" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>
            <h5 class="text-xl px-12 uppercase font-bold text-black border-b border-black 
            ">Bonnie Green</h5>
            <div class="flex flex-col items-center pt-4 pb-8"> {{--This is were you will see the toys--}}
                <a href="#" class="hover:scale-110 transition duration-500 uppercase font-bold text-black">Add friend</a>
                <a href="#" class="hover:scale-110 transition duration-500 uppercase font-bold text-black">Message</a>
            </div>
        </div>
    </div>
</div>
@endsection