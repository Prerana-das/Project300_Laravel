<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'messageID';
    protected $fillable = ['name','email','description'];
}
