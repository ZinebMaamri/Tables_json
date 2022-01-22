<?php
namespace APP;
class Commande extends Model{  //php artisan make:model Commande

     protected $table="Vehicles";
     protected $fillable =['Id','poid','destination','latitude','longitude'];

}

?>