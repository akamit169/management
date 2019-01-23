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
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'user@email.com',
            'role' => '1',
            'token' => '123',
            'password' => bcrypt('admin'),
        ]);
    }
}
