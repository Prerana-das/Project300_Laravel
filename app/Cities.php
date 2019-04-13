<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'cityID';
    protected $fillable = ['countryID','city_name','other_details'];

	public function country() {
        return $this->belongsTo('App\Countries','countryID');
    }
}
