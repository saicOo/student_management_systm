<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'role' => 1,
            'password' => bcrypt('1234'),
        ]);
        $user = \App\User::create([
            'name' => 'Admin',
            'email' => 'subAdmin@app.com',
            'role' => 0,
            'password' => bcrypt('1234'),
        ]);
    }
}
