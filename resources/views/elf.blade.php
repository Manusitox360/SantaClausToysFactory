@extends('layouts.index')
@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Id</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Picture</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Age</th>
                    <span class="sr-only">More</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($toys as $toy)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">  
                    <td class="px-6 py-4">{{$toy->id}}</td>
                    <td class="px-6 py-4">{{$toy->name}}</td>
                    <td class="px-6 py-4">{{$toy->picture}}</td>
                    <td class="px-6 py-4">{{$toy->description}}</td>
                    <td class="px-6 py-4">{{$toy->min_age}}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{route('elfShow', $toy->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                    </td>
                </tr>  
            @endforeach  
        </tbody>
    </table>
</div>

@endsection