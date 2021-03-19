<?php

namespace App\Models\Order;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_no', 'customer_id', 'total_quantity', 'total_price', 'total_discount', 'total_vat', 'order_status', 'billing_email', 'billing_name', 'billing_address', 'billing_city', 'billing_phone', 'payment_gateway'];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }
}
