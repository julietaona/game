<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\Mechanic;
use App\Models\Position;
use Carbon\Carbon;

class GameController extends Controller
{
    public function getMechanics()
    {
    	//Get all the mechanics, in this case only 5

    	$mechanics = Mechanic::all();

    	return response()->json($mechanics);
    }

    public function getPositions()
    {
        $positions = Position::all();

        return response()->json($positions);
    }

    public function startGame(Request $request)
    {
        $data = array();

        try
        {
    	   $request->session()->put('time', Carbon::now());
    	   $request->session()->put('score', 100000);

           $data['status'] = true;
        }
        catch(\Exception $e)
        {
            $data['status'] = false;
        }

        return response()->json($data);
    }

    public function calculateScore(Request $request)
    {
        

        $now = Carbon::now();
        $startTime = $request->session()->get('time');

        //calculate the difference between the two dates

        //rest the score 
    }

    public function validateMovement()
    {
        
    }

    public function validateGame()
    {

    }

    public function getScore(Request $request)
    {
        return response()->json($request->session()->get('score'));
    }

}
