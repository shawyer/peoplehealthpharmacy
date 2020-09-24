<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table = "Sales";
    protected $primaryKey = 'id';
    public $incrementing = true;

    public function ItemSales(){
        return $this->hasMany('App\Models\ItemSale');
    }

}
