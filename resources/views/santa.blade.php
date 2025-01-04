@extends('layouts.index')
@section('content')

<div class="flex justify-center px-[6rem] py-12">
    <table class="text-white w-full ">
        <thead class="text-xs bg-candy-cane uppercase text-black sticky top-[4.7rem]">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-tl-lg">Id</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Surname</th>
                <th scope="col" class="px-6 py-3">Photo</th>
                <th scope="col" class="px-6 py-3">Age</th>
                <th scope="col" class="px-6 py-3">Gender</th>
                <th scope="col" class="px-6 py-3">Attitude</th>
                <th class="px-3 py-3 rounded-tr-lg"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kids as $kid)
            <tr class="border-b text-white hover:bg-[#ffffff80]">
                <td class="text-center p-4">
                    <a href="{{ route('santaShow', $kid->id) }}"class="">{{$kid->id}}</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('santaShow', $kid->id) }}"class="">{{$kid->name}}</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('santaShow', $kid->id) }}"class="">{{$kid->surname}}</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('santaShow', $kid->id) }}"class="">{{$kid->foto}}</a>                    
                </td>
                <td class="text-center">
                    <a href="{{ route('santaShow', $kid->id) }}"class="">{{$kid->age}}</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('santaShow', $kid->id) }}"class="">{{$kid->gender}}</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('santaShow', $kid->id) }}"class="">{{$kid->atitude}}</a>
                </td>
                <td class="text-center pr-5">
                    <a href="{{ route('santaShow', $kid->id) }}" class="">🔍</a>
                </td>
            </tr>
            @endforeach  
            
        </tbody>
    </table>
</div>
@endsection

