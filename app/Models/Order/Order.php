<?php

namespace App\Models\Order;

use App\Models\User;

use App\Models\Shop\Shop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_no', 'customer_id', 'shop_id', 'total_quantity', 'total_price', 'total_discount', 'total_vat', 'sub_total_price', 'order_status', 'order_note', 'shipping_fee', 'shipping_email', 'shipping_name', 'shipping_address', 'shipping_city', 'shipping_area', 'shipping_phone', 'billing_email', 'billing_name', 'billing_address', 'billing_city', 'billing_area', 'billing_phone', 'payment_gateway'];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }

    public function orderStatus()
    {
        switch ($this->order_status) {
            case 0:
                return 'Canceled';
                break;
            case 1:
                return 'Pending';
                break;
            case 2:
                return 'Processing';
                break;
            case 3:
                return 'Delivery';
                break;
            case 4:
                return 'Complete';
                break;
            case 5:
                return 'Refund';
                break;
          }
    }
}
