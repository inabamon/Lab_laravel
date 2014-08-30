<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Item extends Eloquent {
	protected $table      = 'items';
	protected $primaryKey = 'id';
	public function company()
	{
		return $this->belongsTo('company');
	}
	public function order()
	{
		return $this->hasMany('Order');
	}
	public function storage()
	{
		return $this->hasMany('storage');
	}
}