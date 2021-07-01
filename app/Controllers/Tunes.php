<?php

namespace App\Controllers;    //die("Controller view: Tasks/index");

class Tunes extends BaseController
{
    public function index()
    {
        $model = new \App\Models\TunesModel;
        $data = $model->findAll();

        return view("Tunes/index", ['tunes' => $data]);
    }

    public function getMemTunes($memID)
    {
        $model = new \App\Models\TunesModel;
        $data = $model->select('title, tuneSheet')->orderBy('title', 'ASC')->where('memID', $memID)->findAll(); // array of tunes
        //dd($data);
        return view('tunes/show', ['tunes' => $data]) ;
    }

    public function showLogoutMessage()
    {
        return redirect()->to('/')->with('info', 'Logout successful');
    }
}
