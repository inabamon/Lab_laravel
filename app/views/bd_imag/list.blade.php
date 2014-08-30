@extends('layout')

@section('content')
<div class='content'>
	@include('bd_imag.title')
	<div class='item_box'>
		<ul class='item_box__title'>
			<li>Item name</li>
			<li>Stock</li>
			<li>Order</li>
		</ul>
		@foreach ($list as $value)
		<ul class='item_box__item'>
			<a href="../bd_imag/{{ $value[ 'item' ] }}">
				<li>{{ $value[ 'item' ] }}</li>
				<li>{{ $value[ 'stock' ] }}</li>
				<li>{{ $value[ 'order' ] }}</li>
				<li>set</li>
			</a>
		</ul>
		@endforeach
	</div>
</div>
@stop