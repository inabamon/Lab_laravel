<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Order extends Eloquent
{
	protected $table      = 'orders';
	protected $primaryKey = 'id';
	public function item()
	{
		return $this->belongsTo('item');
	}
}