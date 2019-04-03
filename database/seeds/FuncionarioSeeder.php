<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Funcionario;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcionarios')->insert([
            'nombre' => 'Juan Gomez',
            'cargo' => 'Director',
        ]);
       /* Funcionario::create([
            'nombre' => 'Pedro Perez',
            'cargo' => 'Asistente Ejecutivo',
        ]);*/
        factory(App\Funcionario::class, 25)->create();//para generar 25 aleatoriamente 
    }
}
