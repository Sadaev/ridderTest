<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerVaccination">

    {{__('auth.signUpForVaccination')}}

</button>


<!-- Modal -->

<div wire:ignore.self class="modal fade" id="registerVaccination" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel"> {{__('auth.signUpForVaccination')}}</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">
                <form>
                <div class="mb-3 row">
                    <label for="peopleFio" class="col-sm-3 col-form-label">{{__('auth.fio')}}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="peopleFio" wire:model="peopleFio" />
                    </div>
                        @error('peopleFio') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3 row">
                    <label for="peopleIin" class="col-sm-3 col-form-label">{{__('auth.iin')}}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="peopleIin" wire:model="peopleIin" />
                    </div>
                    @error('peopleIin') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3 row">
                    <label for="peopleTel" class="col-sm-3 col-form-label">{{__('auth.phone')}}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="peopleTel" wire:model="peopleTel" />
                    </div>
                    @error('peopleTel') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3 row">
                    <label for="vaccineId" class="col-sm-3 col-form-label">{{__('auth.typeOfVaccine')}}</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" wire:model="vaccineId">
                            <option selected>{{__('auth.chooseValue')}}</option>
                            @foreach($vaccineTypes as $vaccine)
                                <option value="{{$vaccine->id}}">{{$vaccine->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('vaccineId') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3 row">
                    <label for="hospitalId" class="col-sm-3 col-form-label">{{__('auth.hospital')}}</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" wire:model="hospitalId">
                            <option selected>{{__('auth.chooseValue')}}</option>
                            @foreach($hospitals as $hospital)
                                <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('hospitalId') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3 row">
                    <label for="dateOfVaccine" class="col-sm-3 col-form-label">{{__('auth.desiredDate')}}</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="peopleTel" wire:model="dateOfVaccine" />
                    </div>
                    @error('dateOfVaccine') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

            </form>
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('auth.cancel')}}</button>
                <button wire:click.prevent="store()" class="btn btn-primary close-modal">{{__('auth.save')}}</button>

            </div>

        </div>

    </div>

</div>
