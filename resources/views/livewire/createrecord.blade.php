<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="hospitalName" class="block text-gray-700 text-sm font-bold mb-2">{{__('auth.hospitalName')}}</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="hospitalName" wire:model="hospitalId">
                                <option value="">{{__('auth.chooseValue')}}</option>
                                @foreach($hospitals as $hospital)
                                    <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                @endforeach
                            </select>
                            @error('hospitalId') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="vaccineName" class="block text-gray-700 text-sm font-bold mb-2">{{__('auth.vaccineName')}}</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="vaccineName" wire:model="vaccineId">
                                <option value="">{{__('auth.chooseValue')}}</option>
                                @foreach($vaccineTypes as $vaccine)
                                    <option value="{{$vaccine->id}}">{{$vaccine->name}}</option>
                                @endforeach
                            </select>
                            @error('vaccineId') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="count" class="block text-gray-700 text-sm font-bold mb-2">{{__('auth.count')}}</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="count" placeholder="{{__('auth.enterCount')}}" wire:model="count">
                            @error('count') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            {{__('auth.save')}}
                          </button>
                        </span>
                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                            <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                {{__('auth.cancel')}}
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
