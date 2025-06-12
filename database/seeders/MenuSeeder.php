<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'name' => 'Nasi Lemak Ayam',
                'category' => 'nasi',
                'price' => 5.00,
                'image' => 'nasilemakayam.png',
                'mahallah' => 'Siddiq',
            ],
            [
                'name' => 'Mee Goreng Mamak',
                'category' => 'mee',
                'price' => 4.50,
                'image' => 'meegoreng.png',
                'mahallah' => 'Siddiq',
            ],
            [
                'name' => 'Teh Tarik',
                'category' => 'drinks',
                'price' => 2.00,
                'image' => 'tehtarik.png',
                'mahallah' => 'Siddiq',
            ],
            [
                'name' => 'Nasi Ayam Penyet',
                'category' => 'nasi',
                'price' => 6.00,
                'image' => 'ayam_penyet.png',
                'mahallah' => 'Aminah',
            ],
            [
                'name' => 'Milo Ais',
                'category' => 'drinks',
                'price' => 2.50,
                'image' => 'miloais.png',
                'mahallah' => 'Aminah',
            ],
            [
                'name' => 'Mee Rebus',
                'category' => 'mee',
                'price' => 4.00,
                'image' => 'meerebus.png',
                'mahallah' => 'Aminah',
            ],
            [
                'name' => 'Nasi Goreng Kampung',
                'category' => 'nasi',
                'price' => 4.80,
                'image' => 'nasigorengkampung.png',
                'mahallah' => 'Ruqayyah',
            ],
            [
                'name' => 'Air Sirap',
                'category' => 'drinks',
                'price' => 1.50,
                'image' => 'sirap.png',
                'mahallah' => 'Ruqayyah',
            ],
            [
                'name' => 'Kuey Teow Goreng',
                'category' => 'mee',
                'price' => 4.30,
                'image' => 'kueyteow.png',
                'mahallah' => 'Ruqayyah',
            ],
        ]);
    }
}
