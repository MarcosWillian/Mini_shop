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
    	/**
	     * Cria os usários teste do sistema.
	     *
	     */
        DB::table('users')->insert([
            'nome' => str_random(25),
            'email' => str_random(15).'@email.com',
            'endereco' => 'Rua '. str_random(30),
            'foto' => null,
        ]);
    }
}
