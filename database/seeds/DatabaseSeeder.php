<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // memanggil 
         $this->call(RolesTableSeeder::class);

         // user admin pertemuan ke 8
         $this->call(AdminTableSeeder::class);
         // pertemuan ke 13 
         $this->call(AuthorsTableSeeder::class);
         $this->call(BooksTableSeeder::class);
         
    }
}
