<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders')}}-{{Auth::user()->role}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                @if($orders->isEmpty())
                    <p>{{__('Нет заказов')}}</p>
                @else

                    @foreach($orders as $order)
                    <div class="flex border border-collapse">
                        <div class="p-2">
                            <img class="object-cover h-48 " src="{{'/storage/'.$order->order_photo_url}}" alt="{{__('Order')}}">
                        </div>
                        <div class="p-2">
                            <p class="text-xl">Заказ: {{$order->name}}</p>
                            <p>Начало: {{date('d.m.Y',strtotime($order->start_at))}}</p>
                            <p>Окончание: {{date('d.m.Y',strtotime($order->finish_at))}}</p>
                            <p>Статус заказа: {{$order->finished_at ? date('d.m.Y',strtotime($order->finished_at)):'В работе'}}</p>
                            <p>Cоздан - {{date('d.m.Y',strtotime($order->published_at))}}</p>
                        </div>
                    </div>

                    @endforeach
                @endif
                <x-button class="my-2">
                    <a href="{{route('orders.create')}}">{{__('Add an order')}}</a>
                </x-button>
            </div>
        </div>
    </div>
</x-app-layout>
