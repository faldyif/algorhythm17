<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Algorhythm 17',
            'email' => 'admim@algorhythm-ugm.com',
            'password' => bcrypt('danieluhuy123'),
          	'role_id' => '0',
          	'from_instance' => 'Himakomsi UGM',
          	'phone' => 'Anonymous',
          	'paid_amount' => '-1',
        ]);
    }
}
