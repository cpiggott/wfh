<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class LinksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getWfh(){
        $user = Auth::user();

        if($user->links_active){
            //Update status
        } else {
            //Render view
        }
    }

    public function getEnRoute(){
        $user = Auth::user();

        if($user->links_active){
            //Update their status to EnRoute
            return $user->statuses;
        } else {
            //Render the view to save link



        }
    }
}
