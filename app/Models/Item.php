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
    public function sales () {
        return $this->belongsToMany('App\Models\Sale', 'itemsale', 'Items_Id', 'Sales_Id')->withPivot(['Item_Sold']);
    }
}
