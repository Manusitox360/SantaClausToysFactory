@extends('layouts.index')
@section('content')
<button>
    <a href="{{route('gift')}}">Carajo</a>
</button>
<div class="flex justify-center px-[6rem] py-12">
    <table class="text-white w-full ">
        <thead class="text-xs bg-candy-cane uppercase text-black sticky top-[4.7rem] z-10">
            <tr>
                <th scope="col" class="py-[0.4rem] text-xl rounded-t-lg">Kids</th>
            </tr>
        </thead>
        <tbody class="flex flex-wrap rounded-b-lg items-center justify-center bg-[#ffffff80] z-10">
            @foreach ($kids as $kid)
                <tr>
                    <td class="">
                        <a class="flex justify-center items-center flex-col" href="{{route('santaShow', $kid->id)}}">
                            <div class="flex min-h-[4rem] max-w-[10rem] items-center justify-center uppercase text-xs pt-2">{{$kid->id}}. {{$kid->name}} {{$kid->surname}}</div>
                            <img class="z-0 transition hover:scale-110 duration-500 rounded-full p-4 w-[12rem] min-h-[12rem] max-h-[12rem]" src="{{$kid->image}}" alt="image">
                        </a>
                    </td>
                </tr>  
            @endforeach
        </tbody>
    </table>
</div>
@endsection

