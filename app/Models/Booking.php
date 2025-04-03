<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Notifications\BookingNotification;

class Booking extends Model
{
  //
  use HasFactory;

  protected $fillable = [
    'user_id',
    'business_id',
    'location',
    'collection_date',
    'instruction',
    'boxes_collected',
    'containers_collected',
    'boxes_requested',
    'containers_requested',
    'status'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function business()
  {
    return $this->belongsTo(Business::class);
  }

  public function markAsCompleted()
  {
    $this->update(['status' => 'completed']);
  }

  public static function boot()
  {
    parent::boot();

    static::created(function ($booking) {
      $booking->user->notify(new BookingNotification($booking));
    });
  }
}
