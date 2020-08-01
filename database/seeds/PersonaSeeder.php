<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'administrador',
            'tipo_documento' => 'DNI',
            'num_documento' => '11111111',
            'direccion' => 'prueba',
            'telefono' => '999999999',
            'email' => 'prueba@gmail.com'
        ]);
    }
}
