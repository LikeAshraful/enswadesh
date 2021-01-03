<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // order
         $order = Order::updateOrCreate([
            'order_no' => rand(10,1000),
            'customer_id' => 2,
            'total_quantity' => 3,
            'total_price' => 715,
            'order_status' => 1,
            'billing_email' => Str::random(10) . '@mail.com',
            'billing_name' => Str::random(10),
            'billing_address' => 'Hatirpul',
            'billing_city' => 'Dhaka',
            'billing_phone' => rand()

            ]);

            $order2 = Order::updateOrCreate([
                'order_no' => rand(10,1000),
                'customer_id' => 5,
                'total_quantity' => 6,
                'total_price' => 670,
                'order_status' => 1,
                'billing_email' => Str::random(10) . '@mail.com',
                'billing_name' => Str::random(10),
                'billing_address' => 'Nikunja',
                'billing_city' => 'Dhaka',
                'billing_phone' => rand()
    
                ]);


        // order item
        $orderItem = OrderItem::updateOrCreate([
            'order_id' => $order->id,
            'product_id' => 3,
            'color_id' => 2,
            'size_id' => 3,
            'order_quantity' => 1,
            'discount' => 0,
            'vat' => 15,
            'price' => '700',

            ]);

        $orderItem = OrderItem::updateOrCreate([
            'order_id' => $order2->id,
            'product_id' => 2,
            'color_id' => 2,
            'size_id' => 3,
            'order_quantity' => 2,
            'discount' => 30,
            'vat' => 0,
            'price' => '200',

            ]);

        $orderItem = OrderItem::updateOrCreate([
            'order_id' => $order2->id,
            'product_id' => 5,
            'color_id' => 2,
            'size_id' => 3,
            'order_quantity' => 1,
            'discount' => 0,
            'vat' => 0,
            'price' => '500',

            ]);

        Model::unguard();
    }
}
