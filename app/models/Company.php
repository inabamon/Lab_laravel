<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Company extends Eloquent
{
	protected $table      = 'companys';
	protected $primaryKey = 'id';
	public function item()
	{
		return $this->hasMany('item');
	}
}