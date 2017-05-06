<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';

    protected $fillable = [
        'id', 'title', 'auth', 'created_at', 'updated_at', 'manager', 'member', 'game_server', 'firewall', 'finance', 'server_auth'
    ];
}
