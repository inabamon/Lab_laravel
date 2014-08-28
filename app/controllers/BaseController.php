<?php

class BaseController extends Controller
{
	public static function getItems($company_name)
	{
		$items = item::whereHas('company', function($q) use ($company_name)
		{
			$q->where('company', $company_name);

		})->get();

		return $items;
	}
}
