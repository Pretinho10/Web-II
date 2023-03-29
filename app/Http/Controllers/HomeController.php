<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function pagHome()
    {

        $Menu = ['Home', 'Categorias', 'Sobre nós', 'Contato'];
        $texto = 'Jesus Te Ama';
        $array = [
            ['nome' => 'João', 'idade' => 20],
            ['nome' => 'Maria', 'idade' => 25],
            ['nome' => 'Carlos', 'idade' => 30],
        ];
        return view('Home', compact('Menu', 'texto', 'array'));
    }
}
