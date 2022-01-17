<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\policestation;
class PolicestationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin verification seeder
        
        policestation::Create([
            'dmp'=>'123456',
            'name'=>'Ashulia',
            'address'=>'Ashulia Bazar',
            'telephone'=>'9654',
            'cell'=>'01736666666',
            'email'=>'ashulia@gmail.com',
            'officername'=>'Salman Hasan(Police Officer)',
            'officeremail'=>'Salman.Hasan@police.gov.bd',
            'officerphone'=>'01711538313'

        ]);

        policestation::Create([
            'dmp'=>'123451',
            'name'=>'Savar Thana',
            'address'=>'Savar',
            'telephone'=>'8965',
            'cell'=>'01235554444',
            'email'=>'saver@gmail.com',
            'officername'=>'Shohel Rahman(Police Officer)',
            'officeremail'=>'Shohel.Rahman@police.gov.bd',
            'officerphone'=>'01713373103'


        ]);
        policestation::Create([
            'dmp'=>'12367',
            'name'=>'Turag Thana',
            'address'=>'uttara sector-10',
            'telephone'=>'9365',
            'cell'=>'01934444444',
            'email'=>'uttara@gmail.com',
            'officername'=>'Nasir Ahmed(Sub-Inspector)',
            'officeremail'=>'Nasir.Ahmed@police.gov.bd',
            'officerphone'=>'01713373100'

        ]);
        policestation::Create([
            'dmp'=>'187456',
            'name'=>'Banani Thana',
            'address'=>'Banani',
            'telephone'=>'5664',
            'cell'=>'01933333333',
            'email'=>'banani@gmail.com',
            'officername'=>'Sazzad Khan(Sub-Inspector)',
            'officeremail'=>'Sazzad.Khan@police.gov.bd',
            'officerphone'=>'01769691415'

        ]);
        policestation::Create([
            'dmp'=>'122256',
            'name'=>'Dhanmondi Thana',
            'address'=>'Dhanmondi',
            'telephone'=>'9666',
            'cell'=>'01953000000',
            'email'=>'dhanmondi@gmail.com',
            'officername'=>'Abdus Salam(Police Officer)',
            'officeremail'=>'Abdus.Salam@police.gov.bd',
            'officerphone'=>'01713398402'

        ]);
        

    }
}
