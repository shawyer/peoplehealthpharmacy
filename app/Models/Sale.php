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

    public function items(){
        return $this->belongsToMany('App\Models\Item', 'itemsale', 'Sales_Id', 'Items_Id')->withPivot(['Item_Sold']);
    }

}
