<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'countryID';
    protected $fillable = ['country_name','country_img','country_region','other_details'];
}
