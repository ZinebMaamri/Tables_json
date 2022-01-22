<?php
namespace App\Controller;
use App\Commande;
use Illuminate\Http\Request;
class CommandeController extends Controller{

    public function index(){
        $commandes=Commandes::all();
        $response=response()->json(($vehicles)); //$response['commande']=$commandes;
        $fp=fopen('commandes.json','w');
        fwrite($fp,json_encode($response));
        fclose($fp);
        return $commandes;
    }

    public function createApi(Request request){
        $Id=$request->input('Id');
        $poid=$request->input('poid');
        $destination=$request->input('destination');
        $latitude=$request->input('latitude');
        $longitude=$request->input('longitude');
        if($Id){
            $concert->Id=$Id;
            $concert->poid=$poid;
            $concert->destiantion=$destination;
            $concert->latitude=$latitude;
            $concert->longitude=$longitude;
            $concert->save();
            retrun response->json(["status"=>"success"]));
        }
        else{
            return response->json(["status"=>"error"]);
        }
    }

    public function addCommande(int $Id,string $poid,string $destination,string $latitude,string $longitude){
        return[
        'Id'->$Id,
        'poid'->$poid,
        'destination'->$destination,
        'latitude'->$latitude,
        'longitude'->$longitude
        ];
    }


}



?>