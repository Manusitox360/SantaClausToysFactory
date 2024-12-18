@extends('layouts.index')
@section('content')

<section class="flex items-center justify-center min-h-screen bg-gray-200 dark:bg-gray-900">
    <div class="text-center p-6 md:p-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">🎅 Welcome to Santa Claus Toys Factory! 🎁</h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">From the heart of the North Pole, Father Christmas and his faithful elves work tirelessly to make this Christmas an unforgettable moment. Here, in the Magic Workshop, they create the toys that will make millions of children around the world smile.</p>
         <a href="{{route('santa')}}" class="inline-block px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 dark:bg-blue-800 dark:hover:bg-blue-900 transition-all">Santa Claus</a>
         <a href="{{route('elf')}}" class="inline-block px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 dark:bg-blue-800 dark:hover:bg-blue-900 transition-all">Elfs</a>
    </div>
</section>

@endsection