<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $months = [
          1 => 'Janeiro',
          2 => 'Fevereiro',
          3 => 'Março',
          4 => 'Abril',
          5 => 'Maio',
          6 => 'Junho',
          7 => 'Julho',
          8 => 'Agosto',
          9 => 'Setembro',
          10 => 'Outubro',
          11 => 'Novembro',
          12 => 'Dezembro',
        ];

        return view('home', [
            'months' => $months,
        ]);
    }
}
