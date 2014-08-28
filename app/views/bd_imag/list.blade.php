@extends('layout')

@section('content')
<div class="content">
	<h1>BD IMag</h1>
	<div class="title_menu">
		<ul>
			<li><a href="order" class="title_menu__btn  btnRound">Order</a></li>
			<li><a href="arrive" class="title_menu__btn  btnRound">Arrive</a></li>
			<li><a href="member_export.php?id=bd_imag" class="title_menu__btn  btnRound">Print</a></li>
		</ul>
	</div>
	<div class="item_box">
		<ul class="item_box__title">
			<li>Item name</li>
			<li>Stock</li>
			<li>Order</li>
		</ul>
		@foreach ($list as $value)
		<ul class="item_box__item">
			<a href="bd_imag_item.php?id=mCD4_enrich_set">
				<li>{{ $value[ "item" ] }}</li>
				<li>{{ $value[ "stock" ] }}</li>
				<li>{{ $value[ "order" ] }}</li>
				<li>set</li>
			</a>
		</ul>
		@endforeach
	</div>
</div>
@stop