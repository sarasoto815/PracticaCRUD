<?php

use Illuminate\Database\Seeder;

class insertarPoetas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poetas')->insert([

            'First_Name' => 'William',
            'SurName' => 'Shakespeare',
            'Address' => 'CALLE GUADALUPE VICTORIA N0.373 COL. 5 DE MAYO TUXTEPEC',
            'PostCode' => 14067,
            'Telephone_Number' => '6145673545'

        ]);

        DB::table('poetas')->insert([

            'First_Name' => 'Rubén',
            'SurName' => 'García Sarmiento',
            'Address' => 'CALLE IGNACIO RAYON NO.949	COL. LAZARO CARDENAS',
            'PostCode' => 34069,
            'Telephone_Number' => '6141083411'

        ]);

        DB::table('poetas')->insert([

            'First_Name' => 'Octavio',
            'SurName' => 'Paz',
            'Address' => 'CALLE IGNACIO MATIAS NO.6	COL.MA. LUISA',
            'PostCode' => 58340,
            'Telephone_Number' => '6148791500'

        ]);

        DB::table('poetas')->insert([

            'First_Name' => 'Federico',
            'SurName' => 'García Lorca',
            'Address' => 'AV. INDEPENDENCIA N0.677	COL. LA PIRAGUA',
            'PostCode' => 68380,
            'Telephone_Number' => '6146701018'

        ]);

        DB::table('poetas')->insert([

            'First_Name' => 'Mario',
            'SurName' => 'Benedetti',
            'Address' => 'AV. LIBERTAD NO. 495	COL.CENTRO',
            'PostCode' => 78900,
            'Telephone_Number' => '6144357890'

        ]);
    }
}
