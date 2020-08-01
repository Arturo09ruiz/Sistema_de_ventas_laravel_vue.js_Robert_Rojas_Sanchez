<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'usuario' => 'administrador',
            'password' => bcrypt('alan2020ELBRAVOCOMPUTER2020'), 
            'condicion' => 1,
            'idrol' => '1',
            'remember_token' => ''
        ]);
    }
}
