<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Tours extends Model
{

    protected $table = 'tours';
    protected $primaryKey = 'tour_ID';
    protected $fillable = ['tour_name','tour_length','tour_description','imageName','start_place','start_time','return_time'];

    public function country() {
        return $this->belongsTo('App\Countries','countryID');
    }
    public function city() {
        return $this->belongsTo('App\Cities','cityID');
    }
     public function category() {
        return $this->belongsTo('App\Category','categoryID');
    }
}

