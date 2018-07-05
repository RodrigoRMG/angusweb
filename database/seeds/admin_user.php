<?php

use Illuminate\Database\Seeder;

class admin_user extends Seeder
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
            'email' => 'admin@app.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
