<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([VerificationTableSeeder::class]);
        $this->call([PolicestationTableSeeder::class ]);
        $this->call([ComplainttypeTableSeeder::class]);
        // $this->call([NidTableSeeder::class]);
    }

    
}
