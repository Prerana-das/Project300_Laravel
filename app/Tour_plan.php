<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour_plan extends Model
{
    protected $table = 'tour_plans';
    protected $primaryKey = 'plan_ID';
    protected $fillable = ['plan_title','description','others_details'];
}
