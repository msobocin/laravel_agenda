<?php

use Illuminate\Database\Seeder;

class ContactosTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contactos')->delete();

        $contactos = array(
            ['id' => 1, 'nom' => 'Ana Maria Rodriguez', 'slug' => 'Ana', 'email' => 'ana@gmail.com', 'tlf' => '352365445', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nom' => 'Juan Manuel', 'slug' => 'Juan', 'email' => 'juan@gmail.com', 'tlf' => '458652236', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nom' => 'Jackson Dario', 'slug' => 'Jackson', 'email' => 'jackson@gmail.com', 'tlf' => '935689652', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'nom' => 'Juana La Loca', 'slug' => 'Juana', 'email' => 'juana@gmail.com', 'tlf' => '936254325', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('contactos')->insert($contactos);
    }

}