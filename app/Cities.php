<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'cityID';
    protected $fillable = ['city_name','other_details'];
}
