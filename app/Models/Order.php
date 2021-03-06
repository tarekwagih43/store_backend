<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'customer_id',
        'user_id',
        'status'
    ];
}
