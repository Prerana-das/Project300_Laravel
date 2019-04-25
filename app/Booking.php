<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'bookID';
    protected $fillable = ['userID','name','email','phone','date','no_of_person','request'];
}
