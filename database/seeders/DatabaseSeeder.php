<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\EscolaProduct;
use App\Models\AdminProduct;
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
        EscolaProduct::factory(10)->create();

        // \App\Models\User::factory()->create([\
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        AdminProduct::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(EscolasTableSeeder::class);
        $this->call(EscolaUserTableSeeder::class);


    }
}