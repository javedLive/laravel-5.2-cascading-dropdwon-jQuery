<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
	protected $table = 'chat_room';
	protected $fillable = array('name');
	public function message()
	{
		return $this->hasMany('Message','chat_room_id')
	}
}
