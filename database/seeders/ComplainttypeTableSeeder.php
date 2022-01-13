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
            'casedetails'=>'Shall be punished with death, or 2[imprisonment] for life, and shall also be liable to fine '

        ]);
        complainttype::Create([
            'casenumber'=>'2002',
            'casetype'=>'Acid Offences',
            'casedetails'=>'Capital punishment, or rigorous imprisonment for life'

        ]);
        complainttype::Create([
            'casenumber'=>'2010',
            'casetype'=>'Violence against women and children',
            'casedetails'=>'Will be imprisonment for upto three years and a fine '

        ]);
        complainttype::Create([
            'casenumber'=>'376',
            'casetype'=>'Rape',
            'casedetails'=>'Shall be punished with 2[imprisonment] for life or with imprisonment  ten years, and shall also be liable to fine '

        ]);
        complainttype::Create([
            'casenumber'=>'363',
            'casetype'=>'Kidnapping',
            'casedetails'=>'Shall be punished with imprisonment of  seven years, and shall also be liable to fine '

        ]);

    }
}
