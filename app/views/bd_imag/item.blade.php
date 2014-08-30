@extends('layout')

@section('content')
<div class='content'>
	@include('bd_imag.title')
	<div class='item_box'>
		<ul class='item_box__title'>
			<li id='item_name'>{{ $name }}</li>
			<li>Order</li>
			<li>Arrive</li>
			<li>Open</li>
			<li>Period</li>
			<li>Lot. #</li>
			<li>Exp date</li>
		</ul>
		@foreach ($items as $num => $item)
		<ul class='item_box__item'>
			<li>{{ $num+1 }}</li>
			<li>{{ $item['order_date'] }}</li>
			<li>{{ $item['arrive_date'] }}</li>
			<li><input type='text' class='input_large open_date' value="{{ $item['open_date'] }}"></li>
			<li>{{ $item['period_day'] }}</li>
			<li><input type='text' class='input_large item_remark lot' value="{{ $item['lot'] }}"></li>
			<li><input type='text' class='input_large item_remark exp_date' value="{{ $item['exp_date'] }}"></li>
		</ul>
		@endforeach
	</div>
</div>
@stop