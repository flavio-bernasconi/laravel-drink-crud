<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ospite;//model

class appController extends Controller
{
    public function getDrinks(){

      // $arrDrinks = Ospite::all();

      // $arrDrinks = Ospite::where('id','>','50') -> get();

      // $arrDrinks = Ospite::where('id','>','50')
      //             -> orderby('name','asc')
      //             -> limit (4)
      //             -> get();

      $arrDrinks = Ospite::all();//classe nel model
      // dd($arrDrinks);

      $maxPrice = Ospite::max('prezzo');
      $minPrice = Ospite::min('prezzo');

      $avgPrice = Ospite::avg('prezzo');


      return view('ospiti', compact('arrDrinks','maxPrice','minPrice','avgPrice'));


    }
}
