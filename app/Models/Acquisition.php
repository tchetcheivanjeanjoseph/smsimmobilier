<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquisition extends Model
{
    use HasFactory;
    protected $guarded = []; 


    public function client() 
    {
        return $this->belongsTo(Client::class,'client_id');
    }

    public function bien() 
    {
        return $this->belongsTo(Bien::class,'bien_id');
    }
}
