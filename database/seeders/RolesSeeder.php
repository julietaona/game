<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Role;
        $row->name = 'Jackman';
        $row->id = 1;
        $row->save();

        $row = new Role;
        $row->name = 'Gasman';
        $row->id = 2;
        $row->save();

        $row = new Role;
        $row->name = 'Mechanic';
        $row->id = 3;
        $row->save();
    }
}
