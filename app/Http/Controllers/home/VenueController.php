<?php

namespace App\Http\Controllers\home;

use App\Type;
use App\Venue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VenueController extends Controller
{
    //场馆列表{所有}
    public function list(){
        /*查询所有的场馆    -----pagination指令分页*/
        $venues = Venue::paginate(6);
        $types = Type::all();
        return view("venue/list",compact('venues','types'));
    }


    public function type($id){
        /*查询所有的场馆    -----pagination指令分页*/
        $venues = Venue::where("type_id",$id)->paginate(6);
        $types = Type::all();
        return view("venue/list",compact('venues','types'));
    }
}
