<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mechanic;

class MechanicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$row = new Mechanic;
        $row->img = 'jackwoman.png';
        $row->role_id = 1;
        $row->save();

        $row = new Mechanic;
        $row->img = 'gaswoman.png';
        $row->role_id = 2;
        $row->save();

        $row = new Mechanic;
        $row->img = 'mechanic1.png';
        $row->role_id = 3;
        $row->save();

        $row = new Mechanic;
        $row->img = 'mechanic2.png';
        $row->role_id = 3;
        $row->save();

        $row = new Mechanic;
        $row->img = 'mechanic3.png';
        $row->role_id = 3;
        $row->save();
    }
}
