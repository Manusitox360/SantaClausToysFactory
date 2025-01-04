@extends('layouts.index')
@section('content')

<div class="flex justify-center px-[6rem] py-12">
    <table class="text-white w-full">
        <thead class="text-xs bg-candy-cane uppercase text-black sticky top-[4.7rem]">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-tl-lg">Id</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Picture</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-5 py-3 rounded-tr-lg">Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($toys as $toy)
              <tr class="border-b text-white hover:bg-[#ffffff80]">
                    <td class="text-center p-4">
                        <a href="{{route('elfShow', $toy->id)}}">{{$toy->id}}</a>
                    </td>
                    <td class="text-center">
                        <a href="{{route('elfShow', $toy->id)}}">{{$toy->name}}</a>
                    </td>
                    <td class="flex flex-wrap items-center justify-center">
                        <a href="{{route('elfShow', $toy->id)}}">
                            <img class="py-2 w-[10rem]" src="{{$toy->image}}" alt="image">
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{route('elfShow', $toy->id)}}">{{$toy->description}}</a>
                    </td>
                    <td class="text-center">
                        <a href="{{route('elfShow', $toy->id)}}">{{$toy->minimumAge->min}}-{{$toy->minimumAge->max}}
                            <br>
                            Years
                        </a>
                    </td>
                </tr>  
            @endforeach  
        </tbody>
    </table>
</div>
@endsection