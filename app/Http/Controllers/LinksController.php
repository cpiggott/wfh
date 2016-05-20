<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;

use App\Status;


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

    public function getOOO(){
        if($user->links_active){
            //Update status
        } else {
            //Render view
        }
    }

    public function getOTW(){
        $user = Auth::user();

        if($user->links_active){
            //Update their status to EnRoute
            $status = Status::create([
                'status' => 'OTW',
                'user_id' => $user->id
            ]);

            return redirect('home')->with('status', 'Updated Status to OTW');;
        } else {
            //Render the view to save link

        }
    }

    public function getIn(){
        $user = Auth::user();

        if($user->links_active){
            //Update their status to EnRoute
            $status = Status::create([
                'status' => 'In',
                'user_id' => $user->id
            ]);

            return redirect('home')->with('status', 'Updated Status to In');;
        } else {
            //Render the view to save link

        }
    }



}
