<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mark;

class Item extends Model
{
    use HasFactory, HasUuids;
    protected $guarded=[];

    public function marks(){
        return $this->hasMany(Mark::class);

    }
}
