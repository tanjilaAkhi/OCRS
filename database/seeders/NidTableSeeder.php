<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user NId verification seeder
        Nid::Create([
            'nid_no'=>bcrypt('1234567891012'),
            'name'=>'Rahim ahmed',
            'fname'=>'Karim Ahmed',
            'mname'=>'Bonna Ahmed',
            'cell'=>'0172',
            'email'=>'r@gmail.com',
            'address'=>'Jamgora'
        ]);

        Nid::Create([
            'nid_no'=>bcrypt('1234567891013'),
            'name'=>'Tanzila Akhi',
            'fname'=>'Jalil Mollah',
            'mname'=>'Taslima Begum',
            'cell'=>'0195',
            'email'=>'a@gmail.com',
            'address'=>'Ashulia'
        ]);

        Nid::Create([
            'nid_no'=>bcrypt('1234567891014'),
            'name'=>'Ariful Hasan',
            'fname'=>'Jalil ',
            'mname'=>'Taslima',
            'cell'=>'0154',
            'email'=>'e@gmail.com',
            'address'=>'Zirabo'
        ]);

        Nid::Create([
            'nid_no'=>bcrypt('1234567891015'),
            'name'=>'Tanvirul Hasan',
            'fname'=>'Rahim Hasan',
            'mname'=>'Amena Begum',
            'cell'=>'0135',
            'email'=>'t@gmail.com',
            'address'=>'Bailpail'
        ]);
        
        Nid::Create([
            'nid_no'=>bcrypt('1234567891016'),
            'name'=>'Kamrul Hasan',
            'fname'=>'Motin Hasan',
            'mname'=>'Haowa Begum',
            'cell'=>'0146',
            'email'=>'k@gmail.com',
            'address'=>'Motijil'
        ]);
        
        Nid::Create([
            'nid_no'=>bcrypt('1234567891017'),
            'name'=>'Rajon Mia',
            'fname'=>'Fayezuddin',
            'mname'=>'Rajia',
            'cell'=>'0178',
            'email'=>'r@gmail.com',
            'address'=>'Uttara'
        ]);
        
        Nid::Create([
            'nid_no'=>bcrypt('1234567891018'),
            'name'=>'Ratika Afrin',
            'fname'=>'Himel',
            'mname'=>'Etu',
            'cell'=>'0139',
            'email'=>'ra@gmail.com',
            'address'=>'Banni'
        ]);
        
        

    }
}
