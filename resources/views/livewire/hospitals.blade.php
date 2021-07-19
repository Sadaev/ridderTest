
{{--<x-slot name="header" xmlns:wire="http://www.w3.org/1999/xhtml" xmlns:wire="http://www.w3.org/1999/xhtml"--}}
{{--        xmlns:wire="http://www.w3.org/1999/xhtml">--}}

{{--    <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}

{{--        Manage Posts (Laravel 8 Livewire CRUD with Jetstream & Tailwind CSS - ItSolutionStuff.com)--}}

{{--    </h2>--}}

{{--</x-slot>--}}

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if (session()->has('message'))

                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">

                    <div class="flex">

                        <div>

                            <p class="text-sm">{{ session('message') }}</p>

                        </div>

                    </div>

                </div>

            @endif
                    <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">{{__('auth.createNewHospital')}}</button>
            @if($isOpen)

                @include('livewire.create')

            @endif

            <table class="table-fixed w-full">

                <thead>

                <tr class="bg-gray-100">
                    <th class="px-4 py-2">{{ __('auth.hospitalName') }}</th>
                    <th class="px-4 py-2">{{ __('auth.hospitalAddress') }}</th>
                    <th class="px-4 py-2">{{ __('auth.Action') }}</th>
                </tr>

                </thead>

                <tbody>

                @foreach($hospitals as $hospital)

                    <tr>
                        <td class="border px-4 py-2">{{ $hospital->name }}</td>
                        <td class="border px-4 py-2">{{ $hospital->address }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $hospital->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" alt="{{ __('auth.Edit') }}"><svg class="bi me-2" width="16" height="16"><use xlink:href="#edit"/></svg></button>
                            <button wire:click="delete({{ $hospital->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" alt="{{ __('auth.Delete') }}"><svg class="bi me-2" width="16" height="16"><use xlink:href="#delete"/></svg></button>
                        </td>
                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>
</div>
