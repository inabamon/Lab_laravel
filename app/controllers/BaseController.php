<?php

class BaseController extends Controller
{
	public static function getItems($company)
	{
		$items = item::whereHas('company', function($q) use ($company)
		{
			$q->where('company', $company);

		})->get();

		return $items;
	}

	public static function checkItem($company, $item)
	{
		$item = item::where('item', $item)->whereHas('company', function($q) use ($company)
		{
			$q->Where('company', $company);

		})->get();

		return count($item);
	}
}