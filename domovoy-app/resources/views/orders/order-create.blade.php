<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Employer')}} - {{__('Create')}} {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-1/3">
            <form method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">
                @csrf
                <x-errors/>
                <div>
                    <x-label for="name" value="{{ __('Title') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="наименование" />
                </div>

                <div class="mt-4">
                    <x-label for="date" value="{{ __('Start date') }}" />
                    <x-input id="date" class="block mt-1 w-full" type="date" name="date" required />
                </div>

                <div class="mt-4">
                    <x-label for="date_end" value="{{ __('Finish date') }}" />
                    <x-input id="date_end" class="block mt-1 w-full" type="date" name="date_end" required />
                </div>

                <div class="mt-4 2xl:flex space-x-2">
                    <div class="mt-4">
                        <x-label for="type" value="{{ __('Type of work') }}" />
                        <select class="border-gray-200 rounded-lg" name="type" id="type">
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-label for="number" value="{{ __('Number') }}" />
                        <x-input class="w-32" id="number" type="number" name="number" :value="old('number')" required :value="old('number')" />
                    </div>

                    <div class="mt-4">
                        <x-label for="currency" value="{{ __('Currency') }}" />
                        <select class="border-gray-200 rounded-lg" name="currency" id="currency">
                            @foreach($currencies as $currency)
                                <option value="{{$currency->id}}">{{$currency->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-4">
                    <x-label for="image" value="{{ __('Image') }}" />
                    <x-input class="w-50 p-1" id="Image" type="file" name="image" accept="image/*" :value="old('image')"/>
                </div>


                <div class="flex items-center justify-end mt-4">
                    <x-button class="ms-4">
                        {{ __('Create') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
