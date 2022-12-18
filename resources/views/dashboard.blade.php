<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php $time = intval(date('H'))?>
                    @if (4 <= $time && $time <= 12) 
                        <p>{{ Auth::user()->name }}さん おはようございます</p>
                    @elseif (12 <= $time && $time <= 18) 
                        <p>{{ Auth::user()->name }}さん こんにちわ</p>
                    @else
                        <p>{{ Auth::user()->name }}さん こんばんわ</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
<canvas id='myChart'></canvas>

<script>

<?php $data = json_encode($list);?>

 let apiData = JSON.parse('<?= $data ?>');
 var pressureArray = [];
 for(let key in apiData){
   let apikey = (apiData[key]);
  pressureArray.push(apikey['main']['pressure']);
 }
 
 console.log(window.cjs);
console.log(pressureArray);


const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: ["月", "火曜", "水曜", "木曜", "金曜", "土曜", "日曜"],
        datasets: [
            {
                label: "data 1",
                data: pressureArray,
                borderColor: "rgb(75, 192, 192)",
                backgroundColor: "rgba(75, 192, 192, 0.5)",
            },
        ],
    }
});
</script>

</x-app-layout>
