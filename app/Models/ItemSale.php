<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSale extends Model
{
    use HasFactory;
    protected $table = "ItemSale";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps =false;

       
    
}