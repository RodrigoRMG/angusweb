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
            'name' => 'contacto@angus-santafe.mx',
            'email' => 'contacto@angus-santafe.mx',
            'password' => bcrypt('ConAng#2018'),
        ]);
    }
}
