<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $table = 'message';
    protected $fillable = array ('body' );

    public function chatRoom()
    {
    	return $this->belongsTo('ChatRoom','chat_room_id');
    }

    public function user()
    {
    	return $this->belongsTo('User','user_id');
    }

}
