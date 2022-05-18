<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model
{
    use HasFactory;

    //protected $fillable = ['full_name', 'email', 'mobile', 'no_of_persons', 'booking_date', 'package_name'];
    protected $guarded = [];

    public function getBookingDateAttribute($date)
    {
        return $this->attributes['booking_date'] = Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
    }

    public function setBookingDateAttribute($date)
    {
        
        return $this->attributes['booking_date'] = Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
    }
}
