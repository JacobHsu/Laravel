<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	public static function getMember($id)
	{
		return 'member name is jacobhsu '.$id;
	}
}