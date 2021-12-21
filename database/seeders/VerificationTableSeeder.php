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
            'email'=>'m@gmail.com'

        ]);

//user NId verification seeder
        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);

        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);

        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);

        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);
        
        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);
        
        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);
        
        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);
        
        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);
        
        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);
        
        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);
        
        User::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'',
            'fname'=>'',
            'mname'=>'',
            'cell'=>'',
            'email'=>'m@gmail.com',
            'birthdate'=>'',
            'address'=>''
        ]);
        

        
    }
}
