<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $table = 'payments';
    protected $fillable = ["user_id", "order_id", "payment_method", "status"];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
