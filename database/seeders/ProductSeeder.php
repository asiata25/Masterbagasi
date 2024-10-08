<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'shampo sunsilk',
            'price' => 9500,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'sabun lifebuoy',
            'price' => 6500,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'minyak goreng bimoli',
            'price' => 28500,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'mie goreng indomie',
            'price' => 2500,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'kopi kapal api',
            'price' => 18000,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'teh sariwangi',
            'price' => 12000,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'susu dancow',
            'price' => 32000,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'kecap bango',
            'price' => 14500,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'biskuit roma kelapa',
            'price' => 8000,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'roti sari roti',
            'price' => 8500,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'minuman pocari sweat',
            'price' => 7000,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'cokelat silverqueen',
            'price' => 16000,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'tisu paseo',
            'price' => 12000,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'air mineral aqua',
            'price' => 5000,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);

        Product::create([
            'name' => 'sikat gigi formula',
            'price' => 4500,
            'created_at' => fake()->dateTimeBetween(startDate: '-1 week'),
        ]);
    }
}
