<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'User Name',
            'email' => 'user@gmail.com',
            'password' => 'passoword',
        ]);
        
        DB::table('orders')->insert([
              'user_id' => 1,
              'order_status' => 'Processing',
              'total_amount' => 4000
        ]);
        DB::table('orders')->insert([
                'user_id' => 1,
                'order_status' => 'Processing',
                'total_amount' => 4000
        ]);
        DB::table('orders')->insert([
                'user_id' => 1,
                'order_status' => 'Processing',
                'total_amount' => 4000
        ]);
    }
}
