<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; //add

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat role
        Role::create([
            'name' => 'admin'
        ]);


        Role::create([
            'name' => 'user'
        ]);

    }
}
