<?php

namespace App\Http\Controllers;
use App\Models\item;

use Illuminate\Http\Request;

class inventController extends Controller
{
    function list($itemID=null){
        return $itemID? item::find($itemID):item::All();
    }
   
}
