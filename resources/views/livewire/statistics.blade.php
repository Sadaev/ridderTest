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
{{--            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">{{__('auth.add')}}</button>--}}
{{--            @if($isOpen)--}}

{{--                @include('livewire.createrecord')--}}

{{--            @endif--}}

            <table class="table-fixed w-full">

                <thead>

                <tr class="bg-gray-100">
                    <th class="px-4 py-2">{{ __('auth.hospital') }}</th>
                    <th class="px-4 py-2">{{ __('auth.countOfVaccinated') }}</th>
{{--                    <th class="px-4 py-2">{{ __('auth.lastDate') }}</th>--}}
{{--                    <th class="px-4 py-2">{{ __('auth.count') }}</th>--}}
{{--                    <th class="px-4 py-2">{{ __('auth.Action') }}</th>--}}
                </tr>

                </thead>

                <tbody>

                @foreach($records as $hospitalName => $count)

                    <tr>
                        <td class="border px-4 py-2">{{ $hospitalName}}</td>
                        <td class="border px-4 py-2">{{ $count }}</td>
{{--                        <td class="border px-4 py-2">--}}
{{--                            <button wire:click="edit({{ $record->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">{{ __('auth.Edit') }}</button>--}}
{{--                            <button wire:click="delete({{ $record->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">{{ __('auth.Delete') }}</button>--}}
{{--                        </td>--}}
                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>
</div>
