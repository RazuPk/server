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
//Aggreget 

function Aggregate(){
    //data count
    // $result=DB::table('details')->count();
    //maximum
    // $result=DB::table('details')->max('roll');
    //minimum
    // $result=DB::table('details')->min('roll');
    //average
    // $result=DB::table('details')->avg('roll');
    //summation
    $result=DB::table('details')->sum('roll');
    return $result;
}
// CRUD
function Insert(Request $request){
    $name=$request->input('name');
    $roll=$request->input('roll');
    $city=$request->input('city');
    $phone=$request->input('phone');
    $class=$request->input('class');
    $result=DB::table('details')->insert(['name'=>$name,'roll'=>$roll,'city'=>$city,'phone'=>$phone,'class'=>$class]);
   if($result==true){
       return 'Data saved success';
   }else{
       return 'Data saved failed..';
   }
}
function Update(Request $request){
    $id=$request->input('id');
    $name=$request->input('name');
    $result=DB::table('details')->where('id',$id)->update(['name'=>$name]);
    if($result==true){
        return 'Updated success';
    }else{
        return 'Update failed..';
    }
}
function Delete(Request $request){
    $id=$request->input('id');
    $result=DB::table('details')->where('id',$id)->delete();
    if($result==true){
        return 'Delete success';
    }else{
        return 'Deleted failed..';
    }
}

}