<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InventorySeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@inventaris.test'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password123'),
            ]
        );

        $aksesori = Category::firstOrCreate([
            'name' => 'Aksesori',
        ]);

        $perangkat = Category::firstOrCreate([
            'name' => 'Perangkat Komputer',
        ]);

        $penyimpanan = Category::firstOrCreate([
            'name' => 'Penyimpanan',
        ]);

        $items = [
            [
                'category_id' => $aksesori->id,
                'name' => 'Keyboard',
                'price' => 150000,
                'stock' => 10,
            ],
            [
                'category_id' => $aksesori->id,
                'name' => 'Mouse',
                'price' => 75000,
                'stock' => 20,
            ],
            [
                'category_id' => $perangkat->id,
                'name' => 'Monitor',
                'price' => 1500000,
                'stock' => 5,
            ],
            [
                'category_id' => $aksesori->id,
                'name' => 'Headset',
                'price' => 250000,
                'stock' => 8,
            ],
            [
                'category_id' => $penyimpanan->id,
                'name' => 'Flashdisk',
                'price' => 85000,
                'stock' => 15,
            ],
        ];

        foreach ($items as $item) {
            Item::firstOrCreate(
                ['name' => $item['name']],
                $item
            );
        }
    }
}
