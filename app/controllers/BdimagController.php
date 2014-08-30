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
			return View::make( 'error' );
		}

		$storage = storage::where('arrive_date', '!=', 'null')->whereHas('item', function($q) use($item) {
			$q->Where('item', $item);
		})->get();

		return View::make('bd_imag.item')->with(array(
			'name' => $item,
			'items' => $storage)
		);
	}

	public function bdorder()
	{
		$data_insert = array();
		$order_date = Input::get('orderDate');
		$i = 0;
		$arr_i = [1, 5, 9, 13, 17, 21, 25];
		foreach (Input::all() as $key => $value) {
			if (in_array($i, $arr_i) && $value != '') {
				$item_id = ($i - 1) / 4 + 1;
				$date = new \DateTime;
				$data_insert[] = array(
					'order_date'     => $order_date,
					'amount'         => Input::get($key),
					'catalog_number' => Input::get($key.'_cat'),
					'price'          => Input::get($key.'_pri'),
					'volume'         => Input::get($key.'_ml'),
					'is_storage'     => 0,
					'item_id'        => $item_id,
					'created_at'     => $date,
					'updated_at'     => $date
				);
				$update = item::find($item_id);
				$update->order += Input::get($key);
				$update->save();
			}
			$i++;
		}
		order::insert($data_insert);
		return Redirect::to('bd_imag/order');
	}
}
