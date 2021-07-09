<div>
    <div class="mb-3 row">
        <label for="peopleFioLottery" class="col-sm-3 col-form-label">{{__('auth.fio')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="peopleFioLottery" wire:model="peopleFio" />
        </div>
        @error('peopleFio') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 row">
        <label for="peopleIinLottery" class="col-sm-3 col-form-label">{{__('auth.iin')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="peopleIinLottery" wire:model="peopleIin" />
        </div>
        @error('peopleIin') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 row">
        <label for="peopleTelLottery" class="col-sm-3 col-form-label">{{__('auth.phone')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="peopleTelLottery" wire:model="peopleTel" />
        </div>
        @error('peopleTel') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 row">
        <label for="hospitalIdLottery" class="col-sm-3 col-form-label">{{__('auth.hospital')}}</label>
        <div class="col-sm-9">
            <select id="hospitalIdLottery" class="form-select" aria-label="Default select example" wire:model="hospitalId">
                <option selected>{{__('auth.chooseValue')}}</option>
                @foreach($hospitals as $hospital)
                    <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                @endforeach
            </select>
        </div>
        @error('hospitalId') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 row">
        <label for="emailLottery" class="col-sm-3 col-form-label">{{__('auth.email')}}</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" id="emailLottery" wire:model="email" />
        </div>
        @error('email') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" wire:change="" type="checkbox" id="approvedInformed" aria-label="..." >
        <label class="form-check-label" for="defaultCheck1">
            {{__('auth.informedAboutLotteryRule')}}
        </label>
    </div>
    @error('approvedInformed') <span class="alert-sm alert-danger">{{ $message }}</span>@enderror

    <div class="alert alert-success" hidden id="createSuccessLottery" role="alert">
        {{__('auth.createdSuccess')}}
    </div>
    <div class="dd-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button " id="saveBtn" {{$saveDisabled ? '' : 'disabled'}}  wire:click.prevent="store()" class="btn btn-primary">{{__('auth.participateInTheCompetition')}}</button>
    </div>
</div>

