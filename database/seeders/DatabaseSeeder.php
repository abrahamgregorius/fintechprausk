<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                'username' => 'shop',
                'password' => bcrypt('shop'),
                'role' => 'shop'
            ],
            [
                'username' => 'bank',
                'password' => bcrypt('bank'),
                'role' => 'bank'
            ],
            [
                'username' => 'iksan',
                'password' => bcrypt('iksan'),
                'role' => 'student'
            ],
            [
                'username' => 'raya',
                'password' => bcrypt('raya'),
                'role' => 'student'
            ],
            [
                'username' => 'tomi',
                'password' => bcrypt('tomi'),
                'role' => 'student'
            ],
            [
                'username' => 'rafel',
                'password' => bcrypt('rafel'),
                'role' => 'student'
            ],
        ]);

        Category::insert([
            ['name' => 'Food'],
            ['name' => 'Drink'],
            ['name' => 'Stationary'],
            ['name' => 'Clothing'],
        ]);

        Product::insert([
            [
                'name' => 'Fuyunghai',
                'category_id' => 1,
                'price' => 10000,
                'stock' => 10,
                'thumbnail' => 'https://source.unsplash.com/random/500x500/?food'
            ],
            [
                'name' => 'Capcay',
                'category_id' => 1,
                'price' => 15000,
                'stock' => 18,
                'thumbnail' => 'https://source.unsplash.com/random/500x500/?vegetables'
            ],
            [
                'name' => 'Fanta',
                'category_id' => 2,
                'price' => 5000,
                'stock' => 29,
                'thumbnail' => 'https://source.unsplash.com/random/500x500/?drinks'
            ],
        ]);

        Wallet::insert([
            [
                'user_id' => 3,
                'credit' => 100000,
                'status' => 'success'
            ]
        ]);

    }
}
