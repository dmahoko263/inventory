<?php

namespace App\Http\Controllers;
use App\Models\item;

use Illuminate\Http\Request;

class inventController extends Controller
{
    //fetch an item
    function list($name){
        return item::where("iName","like","%".$name."%")->get();
    }
    
      //fetch all items
      function listAll(){
        return item::All();
    }

      //fetch all items by id
      function listById($id=null){
        return $id? item::find($id):item::All();
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

    // delete item by itemID
    function delete($id)  {
        $item=item::find($id);
        $result=$item->delete();
        if ($result) {
            return ["Result"=>"Item deleted successfully"];
         }else {
             return ["Result"=>"Failed to delete item"];
         }
    }
}
