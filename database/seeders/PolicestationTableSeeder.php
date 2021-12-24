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
            'dmp'=>bcrypt('123456'),
            'name'=>'Ashulia',
            'address'=>'Ashulia Bazar',
            'telephone'=>'9654',
            'cell'=>'01734',
            'email'=>'ashulia@gmail.com'

        ]);

        policestation::Create([
            'dmp'=>bcrypt('123451'),
            'name'=>'Savar Thana',
            'address'=>'Savar',
            'telephone'=>'8965',
            'cell'=>'01234',
            'email'=>'saver@gmail.com'

        ]);
        policestation::Create([
            'dmp'=>bcrypt('12367'),
            'name'=>'uttara',
            'address'=>'uttara sector-10',
            'telephone'=>'9365',
            'cell'=>'0193',
            'email'=>'uttara@gmail.com'

        ]);
        policestation::Create([
            'dmp'=>bcrypt('187456'),
            'name'=>'Banani',
            'address'=>'Banani',
            'telephone'=>'5664',
            'cell'=>'01933',
            'email'=>'banani@gmail.com'

        ]);
        policestation::Create([
            'dmp'=>bcrypt('122256'),
            'name'=>'Gulshan',
            'address'=>'Gulshan',
            'telephone'=>'9666',
            'cell'=>'01953',
            'email'=>'gulshan@gmail.com'

        ]);
        

    }
}
