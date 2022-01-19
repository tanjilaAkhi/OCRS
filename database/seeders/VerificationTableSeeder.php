<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class VerificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin verification seeder
        
        User::Create([
            'name'=>'User 1',
            'password'=>bcrypt('12345'),
            'email'=>'m@gmail.com',
            'cell'=>'01922222222',
            'role'=>'admin'

        ]);


        
    }
}
