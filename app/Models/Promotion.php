<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'promotions';
    protected $primaryKey = 'id';
    //protected $dates= ['deleted_at'];
    /**
     * Get the user that owns the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
     public function etudiants()
     {
         return $this->hasMany(Etudiant::class);
     }
   
}
