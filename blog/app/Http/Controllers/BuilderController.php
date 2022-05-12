<?php
namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;
class BuilderController extends Controller{
//retriving all
function AllRows(){
   $result= DB::table('details')->get();
   return $result;
}
//single row/column
function Rows(){
    $result=DB::table('details')->where('name','Razu')->first();
    return $result->roll;
}
//single row by its id
function SingleData(){
    $result=DB::table('details')->find(3);
    return $result->name;
}
//list of column
function ListColumn(){
    $result=DB::table('details')->pluck('name','roll');
    return $result; 
}


}