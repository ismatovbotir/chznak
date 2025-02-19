<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Mark extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
