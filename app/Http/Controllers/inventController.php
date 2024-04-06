<?php

namespace App\Http\Controllers;
use App\Models\item;

use Illuminate\Http\Request;

class inventController extends Controller
{
    //fetch an item
    function list($itemID=null){
        return $itemID? item::find($itemID):item::All();
    }

    //add an item
    function add(Request $req)  {

        $item =new item;
        $item->iName=$req->name;
        $item->iDescription=$req->description;
        $item->iQuantity=$req->quantity;
        $result=$item->save();
        if ($result) {
           return ["Result"=>"Item added successfully"];
        }else {
            return ["Result"=>"Failed to add item"];
        }
    }

    //update an item
    function update(Request $req)  {
        $item=item::find($req->id);
        $item->iName=$req->name;
        $item->iDescription=$req->description;
        $item->iQuantity=$req->quantity;
        $result=$item->save();
        if ($result) {
           return ["Result"=>"Item updated successfully"];
        }else {
            return ["Result"=>"Failed to update item"];
        }
    }
}
