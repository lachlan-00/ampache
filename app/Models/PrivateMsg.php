<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Private_Msg extends Model
{
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    
    protected $table = 'private_msgs';
    
    protected $fillable = [
        'subject', 'message', 'from_user_id', 'to_user_id', 'is_read',
    ];
    
    public function newMessageCount($id)
    {
    }
    public function senderName($id)
    {
        $username = User::where('id', '=', $id)->get()->all();

        return $username[0]->username;
    }
    public function recipientName($id)
    {
        $username = User::where('id', '=', $id)->get()->all();

        return $username[0]->username;
    }
    public function messageDate($id)
    {
        $username = User::where('id', '=', $id)->get()->all();

        return $username[0]->date_created;
    }
}
