<?php
namespace App\Controller;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller{

    public function index(){
        $vehicles=Vehicle::all();
        $response=response()->json(($vehicles));//$response['vehicle']=$vehicule;
        $fp=fopen('vehicles.json','w');
        fwrite($fp,json_encode($response));
        fclose($fp);
        return $vehicles;
         
    }
    public function createApi(Reqeust request){
        $Id=$request->input('Id');
        $capacite=$request->input('capacite');
        if($Id){
            $concert->Id=$Id;
            $concert->capacite=$capacite;
            $concert->save();
            retrun response->json(["status"=>"success"]));
        }
        else{
            return response->json(["status"=>"error"]);
        }
    }

   public function addVehicle(int $Id,string $capacite){
       return[
       'Id'->$Id,
       'capcite'->$capacite
       ];
   }

}


?>