<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class); llama a todos los seeders
        $this->call(UsersTableSeeder::class);
        $this->call(FuncionarioSeeder::class);
    }
}
