<?php
// API Route
    Route::get('/index','VehicleController@index');
    Route::get('vehicles',function(){
        $vehicles=[];
        $vehicles[]=addVehicle(1,'2000 kg');
        $vehicles[]=addVehicle(1,'1600 kg');
        $vehicles[]=addVehicle(1,'980 kg');
        $vehicles[]=addVehicle(1,'1010 kg');
        return response()->json(['vehicles'=>$vehicles]);
       
    });
    Route::index('/index','CommandeController@index')
    Route::get('commandes',function(){
        $commandes=[];
        $commandes[]=addCommande(1,'2000 kg','rue ElMorabitin','','');
        $commandes[]=addCommande(2,'1000 kg','rue ....','','');
        $commandes[]=addCommande(3,'1000 kg','Hay ....','','');
        $commandes[]=addCommande(4,'1000 kg','','','');
        // ....
        $commandes[]=addCommande(29,'1000 kg',' ','','');
        $commandes[]=addCommande(30,'1000 kg',' ','','');

        return response()->json(['commandes'=>$commandes]);
    });
?>