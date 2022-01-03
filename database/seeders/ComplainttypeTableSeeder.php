<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\complainttype;

class ComplainttypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin verification seeder
        
        complainttype::Create([
            'casenumber'=>'302',
            'casetype'=>'murder',
            'casedetails'=>'Whoever '

        ]);
        complainttype::Create([
            'casenumber'=>'2002',
            'casetype'=>'Acid Offences',
            'casedetails'=>'If a person i'

        ]);
        complainttype::Create([
            'casenumber'=>'2010',
            'casetype'=>'Violence against women and children',
            'casedetails'=>'If a person is involved '

        ]);
        complainttype::Create([
            'casenumber'=>'376',
            'casetype'=>'Rape',
            'casedetails'=>'Whoever commits rape shall be punished '

        ]);
        complainttype::Create([
            'casenumber'=>'363',
            'casetype'=>'Kidnapping',
            'casedetails'=>'Whoever kidnaps any person '

        ]);

    }
}
