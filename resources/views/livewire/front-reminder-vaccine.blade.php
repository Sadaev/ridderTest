<div class="container">
    <div class="titleContainer">
        <p class="h4">Остаток вакцин в поликлиниках г. Риддер</p>
    </div>
    <div style="width: 70%;margin: 0 auto;">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">{{ __('auth.hospitalName') }}</th>
                <th scope="col">{{ __('auth.vaccineName') }}</th>
                <th scope="col">{{ __('auth.count') }}</th>
            </tr>
            </thead>
            <tbody>
        @foreach($completeData as $data)
            <tr>
                <td>{{$data->hospitalName}}</td>
                <td>{{$data->vaccineName}}</td>
                <td>{{$data->count}}</td>
            </tr>
        @endforeach
            </tbody>
        </table>
    </div>
</div>
