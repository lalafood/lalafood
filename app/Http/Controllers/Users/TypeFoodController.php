<?php
//show food of type
//show detail
namespace App\Http\Controllers\Users;
use App\Http\Controllers\AdminsController;
use Illuminate\Http\Request;
use App\Models\Foods;
use	Illuminate\Filesystem\Filesystem;
use File;

class TypeFoodController extends AdminsController{
    public function getType($type){
        $foods = Foods::where('type',$type)->get();
        //select * form Foods
        return view('member.type',['food' => $foods]);
    }






}
