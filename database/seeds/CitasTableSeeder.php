<?php

use Illuminate\Database\Seeder;

class CitasTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('citas')->delete();

        $citas = array(
            ['id' => 1, 'data' => new Datetime, 'slug' => 'project-1','titol'=> "AA", 'lloc'=>'Madrid','descripcio'=>'Centro', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'data' => new Datetime, 'slug' => 'project-2','titol'=> "BB" ,'lloc'=> 'BCN','descripcio'=>'Cole','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'data' => new Datetime, 'slug' => 'project-3','titol'=> "CC", 'lloc'=> 'Lleida','descripcio'=>'Dentista','created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('citas')->insert($citas);
    }

}