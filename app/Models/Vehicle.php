<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
      'route_id', 'driver_id', 'vehicle_no', 'vehicle_name', 'travel_days', 'owner_name', 'owner_address', 'owner_contact', 'photo'
    ];

    // public function setTravelDaysAttribute($value) {
    //   $this->attributes['travel_days'] = json_encode($value);
    // }
    //
    // public function getTravelDaysAttribute($value) {
    //   $this->attribute['travel_days'] = json_decode($value);
    // }

    public function driver() {
      return $this->belongsTo(Driver::class);
    }

    public function route() {
      return $this->belongsTo(Route::class);
    }
}
