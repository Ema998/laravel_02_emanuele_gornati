<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUsDetail($name)
    {
        $users = [
            ['name'=> 'Silvio', 'surname'=> 'Rossi', 'role'=> 'ceo'],
            ['name'=> 'Gianni', 'surname'=> 'Bianchi', 'role'=> 'frontman'],
            ['name'=> 'Sandro', 'surname'=> 'Verdi', 'role'=> 'creativo'],
        ];

        foreach ($users as $user) {
            if ($name == $user['name']) {
                return view('aboutUsDetail', ['user'=>$user]);
            }
        }
    }
}
