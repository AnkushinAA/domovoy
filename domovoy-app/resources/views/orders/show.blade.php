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
                        <p>id- {{$order->id}}</p>
                        <p>name - {{$order->name}}</p>
                        <p>type - {{$order->type_of_work_id}}</p>
                        <p>currency - {{$order->currency_id}}</p>
                        <p>employer - {{$order->employer_id}}</p>
                        <p>contractor - {{$order->contractor_id}}</p>
                        <p>published - {{$order->published_at}}</p>
                        <p>start - {{$order->start_at}}</p>
                        <p>finish - {{$order->finish_at}}</p>
                        <p>finished - {{$order->finished_at}}</p>
                        <p>photo - {{$order->order_rhoto_url}}</p>
                        <p>создана - {{$order->created_at}}</p>
                    @endforeach
                @endif
                <x-button class="my-2">
                    <a href="{{route('orders.create')}}">{{__('Add an order')}}</a>
                </x-button>
            </div>
        </div>
    </div>
</x-app-layout>
