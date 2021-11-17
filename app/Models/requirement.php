<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class requirement extends Model
{

    protected $guarded = ['id'];
    
    use HasFactory;

    //Relacion uno a muchos inversa

    public function course(){
        return $this->BelongsTo('app\Models\course');
    }
}
