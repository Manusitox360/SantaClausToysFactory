@extends('layouts.index')
@section('content')
<div class="flex justify-center px-[6rem] py-12">
    <table class="text-white w-full">
        <thead class="text-xs bg-candy-cane uppercase text-black sticky top-[4.7rem] z-10">
            <tr>
                <th scope="col" class="py-[0.4rem] text-xl rounded-t-lg">Toys</th>
            </tr>
        </thead>
        <tbody class="flex flex-wrap rounded-b-lg items-center justify-center bg-[#ffffff80] font-bold text-black">
            @foreach ($toys as $toy)
                <tr>
                    <td class="">
                        <a class="flex justify-center items-center flex-col" href="{{route('elfShow', $toy->id)}}">
                            <div class="flex min-h-[4rem] max-w-[11rem] items-center justify-center uppercase text-xs pt-2 text-center">{{$toy->id}}. {{$toy->name}} - ({{$toy->toyType->associated->name}})</div>
                            <img class="z-0 transition hover:scale-110 duration-500 rounded-full p-4 w-[12rem] min-h-[12rem] max-h-[12rem]" src="{{$toy->image}}" alt="image">
                        </a>
                    </td>
                </tr>  
            @endforeach
        </tbody>
    </table>
</div>
@endsection