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
		$order_list  = array(array());
		$order_date  = Input::get('orderDate');
		$order_list  = Input::get('list');
		$items       = item::all();
		$item_ids    = array();

		foreach ($items as $key => $value) {
			$item_ids[$value['item']] = $value['id'];
		}
		foreach ($order_list as $key => $item) {
			if ($item['amount'] == 0) {
				continue;
			}
			$item['order_date'] = $order_date;
			$item['is_storage'] = 0;
			$item['item_id']    = $item_ids[$key];
			$item['created_at'] = date("Y-m-d H:i:s");
			$item['updated_at'] = date("Y-m-d H:i:s");
			$data_insert[]      = $item;
		}
		order::insert($data_insert);
		return Redirect::to('/bd_imag');
	}
}