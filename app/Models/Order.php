<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'shipping_id', 'total', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
