<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'court_id',
        'booking_date',
        'start_time',
        'end_time',
        'total_price',
        'status',
        'customer_name',
        'customer_phone',
        'customer_email',
        'booking_code',
        'snap_token',
        'midtrans_order_id',
        'payment_type',
        'transaction_status',
        'paid_at',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function court()
    {
        return $this->belongsTo(Court::class);
    }
}
