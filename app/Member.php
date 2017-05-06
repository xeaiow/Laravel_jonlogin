<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = [
        'username', 'password', 'firstname', 'email', 'phone', 'qq_id', 'wechat_id', 'line_id', 'group', 'updated_at', 'created_at'
    ];
}
