<div class="block-viccine-info col-4 col-md-6">
	@foreach($statistics as $row)
		<div><span class="statistic-info">{{$row->count}}</span> {{$row->title}}</div>
	@endforeach
	<div>Данные актуальные за <span class="statistic-date">{{date('d.m.Y')}}</span></div>
</div>
