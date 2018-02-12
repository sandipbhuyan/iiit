<?php

use Illuminate\Database\Seeder;

class TableSeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'name' => 'Bhubaneswar',
        ]);

        DB::table('places')->insert([
            'name' => 'Cuttack',
        ]);

        DB::table('places')->insert([
            'name' => 'Sambalpur',
        ]);

        DB::table('places')->insert([
            'name' => 'Rourkela',
        ]);

        DB::table('locations')->insert([
            'place_id'=> 1,
            'name' => 'Red Cross Blood Bank',
            'address' => 'Unit 6, Capital Hospital Campus, Bhubaneswar, Odisha 751001'
        ]);

        DB::table('locations')->insert([
            'place_id'=> 1,
            'name' => 'Kalinga Hospital Limited',
            'address' => ' Nalco Square, Nandankanan Road, Chandrasekharpur, Bhubaneswar, Odisha 751023'
        ]);

        DB::table('locations')->insert([
            'place_id'=> 2,
            'name' => 'Karuna Blood Bank',
            'address' => 'Mangalabag, Cuttack, Odisha 753001'
        ]);

        DB::table('locations')->insert([
            'place_id'=> 2,
            'name' => 'Red Cross Blood Bank',
            'address' => 'Professors Colony, Cuttack, Odisha 753007'
        ]);

        DB::table('locations')->insert([
            'place_id'=> 3,
            'name' => 'Utsarga blood bank',
            'address' => 'Pattnayakpada, Sambalpur, Odisha 768001'
        ]);

        DB::table('locations')->insert([
            'place_id'=> 3,
            'name' => 'Red Cross Blood Bank',
            'address' => ' Modipada, Sambalpur, Odisha 768002'
        ]);

        DB::table('locations')->insert([
            'place_id'=> 4,
            'name' => 'NEW CORPORATE WORLD',
            'address' => 'FLAT NO : E/8 ; SECTOR -16, Rourkela, Odisha 769003'
        ]);
    }
}
