<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Tours extends Model
{

    protected $table = 'tours';
    protected $primaryKey = 'tour_ID';
    protected $fillable = ['tour_length','tour_description','imageName','start_place','start_time','return_time'];
}

