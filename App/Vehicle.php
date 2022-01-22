<?php 
namespace APP;
use Illuminate\Database\Eloquent\Model;
class Vehicle extends Model{ //php artisan make:model Vehicle

      protected $table="Vehicles";
      protected $fillable =['Id','capacite'];

     }



}

?>