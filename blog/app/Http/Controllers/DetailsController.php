<?php
namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;
class DetailsController extends Controller{

    function DetailsSelect(Request $request){
        $SQL="SELECT * FROM details";
        $request=DB::select($SQL);
        return $request;
    }
    function DetailsDelete(Request $request){
        $id=$request->input("id");
        $SQL="DELETE FROM `details` WHERE `id`=?";
        $result= DB::delete($SQL,[$id]);
        if($result==true){
            return "Data deleted success!";
        }else{
            return "Data deleted failed,try again..!";
        }
    }
    function DetailsUpdate(Request $request){
        $id=$request->input("id");
        $city=$request->input("city");
        $class=$request->input("class");

        $SQL="UPDATE `details` SET `city`=?,`class`=? WHERE `id`=?";
        $result=DB::update($SQL,[$city,$class,$id]);
        if($result==true){
            return "Data updated success!";
        }else{
            return "Data updated failed,try again..!";
        }
    }
    function DetailsCreate(Request $request){
        $name=$request->input("name");
        $roll=$request->input("roll");
        $city=$request->input("city");
        $phone=$request->input("phone");
        $class=$request->input("class");

        $SQL="INSERT INTO `details`(`name`, `roll`, `city`, `phone`, `class`) VALUES (?,?,?,?,?)";
        $result= DB::insert($SQL,[$name,$roll,$city,$phone,$class]);
        if($result==true){
            return "Data saved success!";
        }else{
            return "Data saved failed,try again..!";
        }
    }
}