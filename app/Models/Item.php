<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function itemsales(){
        return $this->hasMany('App\Models\ItemSale', 'Items_Id');
    }
}
