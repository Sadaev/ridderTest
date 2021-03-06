<div>
	@if (session()->has('message'))
	<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
		<div class="flex">
			<p class="note note-success">{{ session('message') }}</p>
		</div>		
	</div>
	@endif
    <div class="mb-3 row">
        <label for="peopleFio" class="col-sm-3 col-form-label">{{__('auth.fio')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="peopleFio" wire:model="peopleFio" />
        </div>
        @error('peopleFio') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 row">
        <label for="peopleIin" class="col-sm-3 col-form-label">{{__('auth.iin')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="peopleIin" wire:model="peopleIin" />
        </div>
        @error('peopleIin') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 row">
        <label for="peopleEmail" class="col-sm-3 col-form-label">{{__('auth.email')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="peopleEmail" wire:model="peopleEmail" />
        </div>
        @error('peopleEmail') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 row">
        <label for="peopleTel" class="col-sm-3 col-form-label">{{__('auth.phone')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="peopleTel" wire:model="peopleTel" />
        </div>
        @error('peopleTel') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
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
        @error('vaccineId') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
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
        @error('hospitalId') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 row">
        <label for="dateOfVaccine" class="col-sm-3 col-form-label">{{__('auth.desiredDate')}}</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="peopleTel" wire:model="dateOfVaccine" />
        </div>
        @error('dateOfVaccine') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="alert alert-success" hidden id="createSuccess" role="alert">
        {{__('auth.createdSuccess')}}
    </div>
    <div class="dd-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button"  wire:click.prevent="store()" class="btn btn-primary close-modal">{{__('auth.save')}}</button>
    </div>
</div>
