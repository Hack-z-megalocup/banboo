
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    偏頭痛の痛みのレベルを選んでください。
                    <form action="{{ route('condition.store') }}" method="POST" >
                        @csrf
                        <input type="hidden"name="condition"value ="0">
                        <button type="submit" class="mr-3 ml-2 ">
                            <svg  class="h-12 w-12" >
                                <defs><style>.a,.b,.c{fill:none;}.b,.c{stroke:#000;stroke-miterlimit:10;stroke-width:2px;}.c{stroke-linecap:round;}</style></defs>
                                <rect class="a" width="48" height="48"/><circle class="b" cx="24" cy="24" r="22"/>
                                <line class="c" x1="15" y1="32" x2="33" y2="32"/><line class="c" x1="13.17" y1="20.83" x2="18.83" y2="15.17"/>
                                <line class="c" x1="13.17" y1="15.17" x2="18.83" y2="20.83"/>
                                <line class="c" x1="29.17" y1="20.83" x2="34.83" y2="15.17"/>
                                <line class="c" x1="29.17" y1="15.17" x2="34.83" y2="20.83"/>
                            </svg>
                        </button>
                        <input type="hidden"name="condition"value ="1">
                        <button type="submit" class="mr-2 ml-3 " >
                            <svg class="h-12 w-12" > <defs><style>.a,.b,.c{fill:none;}.b,.c{stroke:#000;stroke-miterlimit:10;stroke-width:2px;}.c{stroke-linecap:round;}</style></defs>
                                    <rect class="a" width="48" height="48"/>
                                    <circle class="b" cx="24" cy="24" r="22"/>
                                    <circle cx="15" cy="18" r="3"/><circle cx="33" cy="18" r="3"/>
                                    <path class="c" d="M33.8,36a10,10,0,0,0-19.6,0"/> 
                            </svg>
                        </button>
                        <input type="hidden"name="condition"value ="2">
                        <button type="submit" class="mr-2 ml-2 " >
                            <svg class="h-10 w-10" ><defs><style>.a,.b,.c{fill:none;}.b,.c{stroke:#000;stroke-miterlimit:10;stroke-width:2px;}.c{stroke-linecap:round;}</style></defs>
                                <rect class="a" width="12" height="12"/>
                                <circle class="b" cx="24" cy="24" r="22"/>
                                <circle cx="15" cy="18" r="3"/><circle cx="33" cy="18" r="3"/>
                                <path class="c" d="M33.8,28a10,10,0,0,1-19.6,0"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

