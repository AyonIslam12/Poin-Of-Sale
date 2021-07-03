<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        Product::create([
            'name' => "Samsung J2 Prime",
            'price' => 225,
            'image' => 'product/1.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);
        Product::create([
            'name' => "Xiaomi Poco X3 Pro",
            'price' => 375,
            'image' => 'product/2.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);
        Product::create([
            'name' => "Clock Classic Men Luxury Brand Watches Black Stainless Steel",
            'price' => 125,
            'image' => 'product/3.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);
        Product::create([
            'name' => "Clock Men Digital Watch Transparent Strap Watches LED",
            'price' => 225,
            'image' => 'product/4.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);
        Product::create([
            'name' => "HP Laptaop Core i5",
            'price' => 1225,
            'image' => 'product/5.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);
        Product::create([
            'name' => "Smart Monitor 40 Inch",
            'price' => 475,
            'image' => 'product/14.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);
        Product::create([
            'name' => "Smart Monitor 21 Inch",
            'price' => 525,
            'image' => 'product/12.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);
        Product::create([
            'name' => "hand clock for man 2021 Snake Head stylis led watch",
            'price' => 125,
            'image' => 'product/8.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);
        Product::create([
            'name' => "Headphone & Speckers",
            'price' => 215,
            'image' => 'product/18.jpg',
            'creator' => '1',
            'status' => '1',
            'created_at' => Carbon::now()->toDateTimeLocalString(),
        ]);

    }
}
