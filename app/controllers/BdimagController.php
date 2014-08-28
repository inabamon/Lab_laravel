<?php

class BdimagController extends BaseController
{
	public function bdlist()
	{
		return View::make( "bd_imag.list" )->with( "list", self::getItems('BD IMag') );
	}
}
