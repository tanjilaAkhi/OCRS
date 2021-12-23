<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'casedetails'=>'Whoever commits murder shall be punished with death, or 2[imprisonment] for life, and shall also be liable to fine'

        ]);
        complainttype::Create([
            'casenumber'=>'2002',
            'casetype'=>'Acid Offences',
            'casedetails'=>'If a person is involved in unlicenced production, import, transport, storage, sale and use acid , he/she will be imprisoned for 3-10 years rigorous imprisonment and additionally liable to pay a fine not exceeding BDT 50,000'

        ]);
        complainttype::Create([
            'casenumber'=>'2010',
            'casetype'=>'Violence against women and children',
            'casedetails'=>'If a person is involved in this act shall be punishable with imprisonment of either description for a term which may extend to one year, or with fine which may extend to twenty thousand rupees, or with both'

        ]);
        complainttype::Create([
            'casenumber'=>'',
            'casetype'=>'',
            'casedetails'=>''

        ]);
        complainttype::Create([
            'casenumber'=>'',
            'casetype'=>'',
            'casedetails'=>''

        ]);

    }
}
