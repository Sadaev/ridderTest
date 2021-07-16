<div>
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
                <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">{{__('auth.add')}}</button>
                @if($isOpen)

                    @include('livewire.create_register_for_lottery')

                @endif

                <table class="table-a w-full">

                    <thead>

                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">{{ __('auth.dateOfRequest') }}</th>
                        <th class="px-4 py-2">{{ __('auth.fio') }}</th>
                        <th class="px-4 py-2">{{ __('auth.iin') }}</th>
                        <th class="px-4 py-2">{{ __('auth.phone') }}</th>
                        <th class="px-4 py-2">{{ __('auth.hospital') }}</th>
                        <th class="px-4 py-2">{{ __('auth.requestStatus') }}</th>
                        <th class="px-4 py-2">{{ __('auth.email') }}</th>
                        <th class="px-4 py-2">{{ __('auth.numberOfParticipant') }}</th>
                        <th class="px-4 py-2">{{ __('auth.Action') }}</th>
                    </tr>

                    </thead>

                    <tbody>

                    @foreach($peoples as $people)

                        <tr>
                            <td class="border px-4 py-2">{{ $people->created_at }}</td>
                            <td class="border px-4 py-2">{{ $people->fio }}</td>
                            <td class="border px-4 py-2">{{ $people->iin }}</td>
                            <td class="border px-4 py-2">{{ $people->phone }}</td>
                            <td class="border px-4 py-2">{{ $people->hospitalName }}</td>
                            <td class="border px-4 py-2">{{ __('auth.'.$people->status) }}</td>
                            <td class="border px-4 py-2">{{ $people->email }}</td>
                            <td class="border px-4 py-2">{{ $people->numberOfParticipiant }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $people->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" title="{{ __('auth.Edit') }}"><svg class="bi me-2" width="16" height="16"><use xlink:href="#edit"/></svg></button>
                                <button wire:click="delete({{ $people->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" title="{{ __('auth.Delete') }}"><svg class="bi me-2" width="16" height="16"><use xlink:href="#delete"/></svg></button>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>
    </div>


</div>
