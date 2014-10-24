<?php

class BdimagController extends BaseController
{
	public function bdlist()
	{
		return View::make('bd_imag.list')->with('list', self::getItems('BD IMag'));
	}

	public function bditem($item)
	{
		if (!self::checkItem('BD IMag', $item)) {
			return View::make('error');
		}

		$storage = storage::where('arrive_date', '!=', 'null')->whereHas('item', function ($q) use ($item) {
			$q->Where('item', $item);
		})->get();

		return View::make('bd_imag.item')->with(array(
				'name' => $item,
				'items' => $storage)
		);
	}

	public function getbdorder()
	{
		return View::make('bd_imag.order')->with('list', self::getItems('BD IMag'));
	}

	public function bdorder()
	{
		$data_insert = array();
		$order_list = array();
		$order_date = Input::get('orderDate');
		$order_list = Input::get('list');

		// echo "<pre>";
		// print_r($order_list);
		// echo "</pre>";
		foreach ($order_list as $key => $item) {
			// if (!isset($item['amount'])) {
			// 	continue;
			// }
			// $update = item::find($key+1);
			// $update->order += $item['amount'];
			echo "<pre>";
			print_r($item);
			echo "</pre>";
			// $update->save();
			$data_insert[] = $item;
		}
		echo "<pre>";
		print_r($data_insert);
		echo "</pre>";
		// order::insert($data_insert);
		// return Redirect::to('bd_imag/order');
	}
}
