<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard page') }} -{{Auth::user()->role}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg pt-2">
            <div class="py-2">
                <a class="text-blue-800" href="{{ route('contractors.index') }}">
                    <{{ __('Назад') }}
                </a>
            </div>
            @if(isset($user->profile_photo_path))
                <img class="h-20 w-20 object-cover" src="{{'/storage/'.$user->profile_photo_path}}" alt="{{$user->name }}" />
            @else
                <x-notPhoto/>
            @endif

            <p class="">{{__('Name')}} - {{$user->name}}</p>
            <p class="">{{__('Estimate')}} - {{$contractor->estimate}}</p>
            <p class="">{{__('Count orders')}} - {{$contractor->count_orders}}</p>
            <p class="">{{__('Number of completed orders')}} - {{$contractor->count_orders_finish}}</p>
        </div>
    </div>
</x-app-layout>
