<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard page') }} - {{__('Employer')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if($contractors->isEmpty())
                    <p>{{'not contactors'}}</p>
                @else
                    <table class="border-callapse border border-slate-500">
                        <thead >
                            <tr>
                                <th class="border border-slate-600 px-4">{{__('Name')}}</th>
                                <th class="border border-slate-600 px-4">{{__('Estimate')}}</th>
                                <th class="border border-slate-600 px-4">{{__('Count orders')}}</th>
                                <th class="border border-slate-600 px-4">{{__('Number of completed orders')}}</th>
                                <th class="border border-slate-600 px-4">{{__('Link')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contractors as $contractor)
                            <tr>
                                <td class="border border-slate-600 p-2 ">{{$contractor->name}}</td>
                                <td class="border border-slate-600 p-2 text-center">{{$contractor->estimate}}</td>
                                <td class="border border-slate-600 p-2 text-center">{{$contractor->count_orders}}</td>
                                <td class="border border-slate-600 p-2 text-center">{{$contractor->count_orders_finish}}</td>
                                <td class="border border-slate-600 p-2 text-center"> <a href="">{{__('Show')}}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <x-button >
                <a href="">{{__('Add an order')}}</a>
            </x-button>
        </div>
    </div>
</x-app-layout>
