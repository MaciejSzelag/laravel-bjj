<?php

namespace App\Models;

use App\Persistance\EloquentPrice;

class PricingPlans 
{
    public function getAllPrices(){
        return EloquentPrice::all();
    }

   public function getPriceByTypeId(string $type_id){
       return EloquentPrice::all()->where('type_id', $type_id);
    }

}
