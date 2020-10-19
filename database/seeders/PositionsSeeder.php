<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Position;
        $row->name = 'front';
        $row->id = 1;
        $row->save();

        $row = new Position;
        $row->name = 'back';
        $row->id = 2;
        $row->save();

        $row = new Position;
        $row->name = 'wheel-front-left';
        $row->id = 3;
        $row->save();

        $row = new Position;
        $row->name = 'wheel-front-right';
        $row->id = 4;
        $row->save();

        $row = new Position;
        $row->name = 'wheel-back-left';
        $row->id = 5;
        $row->save();

        $row = new Position;
        $row->name = 'wheel-back-right';
        $row->id = 6;
        $row->save();
    }
}
