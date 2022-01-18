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
                'name' => 'Wireless Keyboard'
            ],
            [
                'name' => 'Wired Keyboard'
            ],
            [
                'name' => 'Mechanical Keyboard'
            ]
        ]);
    }
}
