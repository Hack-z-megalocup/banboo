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

    <?php //dd($list[0]['weather'][0]['description']); ?>
    
    {{ $list[0]['weather'][0]['description'] }}

</x-app-layout>
