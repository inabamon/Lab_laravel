<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Storage extends Eloquent
{
	protected $table      = 'storages';
	protected $primaryKey = 'id';

	public function item()
	{
		return $this->belongsTo('item');
	}
}