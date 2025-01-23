<h2 class="text-center text-2xl font-bold text-white">📊Toys:</h2>
<table border="1" class="text-white flex flex-col items-center justify-center">
    <thead>
        <tr class="">
            <th class="font-normal pr-[2rem]">Age Range</th>
            <th class="font-normal pl-[2rem]">Number of Toys</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ageRanges as $range)
            <tr>
                <td class="font-normal pr-[8rem]">{{$range}}</td>
                <td class="font-normal pr-[2rem]">{{$range->toys_count}}</td>
            </tr>
        @endforeach
        <tr>
            <td class="font-normal pr-[8rem]"><strong>Total</strong></td>
            <td class="font-normal pr-[2rem]"><strong>{{ $totalToys }}</strong></td>
        </tr>
    </tbody>
</table>