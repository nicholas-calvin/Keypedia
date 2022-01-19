<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('categories')->insert([
            [
                'name' => 'Wireless Keyboard',
                'imgPath' => 'assets/image/wireless/wireless keyboard3.png'
            ],
            [
                'name' => 'Wired Keyboard',
                'imgPath' => 'assets/image/wired/wired keyboard3.jpg'
            ],
            [
                'name' => '60% Mechanical Keyboard',
                'imgPath' => 'assets/image/60% mechanical/60% mechanical keyboard3.jpg'
            ],
            [
                'name' => 'Full Size Mechanical Keyboard',
                'imgPath' => 'assets/image/full size mechanical/full size mechanical keyboard3.jpg'
            ]
        ]);
    }
}
