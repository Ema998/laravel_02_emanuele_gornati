<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottiController extends Controller
{
    public function prodottiDetail($id)
    {
        $prodotti = [
            ['id'=> 1, 'name'=> 'Prodotto 1', 'description'=> 'Descrizione prodotto 1', 'price'=> 10.99],
            ['id'=> 2, 'name'=> 'Prodotto 2', 'description'=> 'Descrizione prodotto 2', 'price'=> 20.99],
            ['id'=> 3, 'name'=> 'Prodotto 3', 'description'=> 'Descrizione prodotto 3', 'price'=> 30.99],
        ];

        foreach ($prodotti as $prodotto) {
            if ($id == $prodotto['id']) {
                return view('prodottiDetail', ['prodotto'=>$prodotto]);
            }
        }
    }
}
