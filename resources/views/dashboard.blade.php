<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <?php $time = intval(date('H'))?>
    @if (4 <= $time && $time <= 12) 
        <p>おはようございます。</p>
    @elseif (12 <= $time && $time <= 18) 
<       p>こんにちわ。</p>
    @else
        <p>こんばんわ。</p>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once '../../../app/Http/Controllers/WeatherController.php';
        
        $weather = new WeatherController();
        $data = $weather->index(0);
        echo $data[0];
    ?>
</x-app-layout>
