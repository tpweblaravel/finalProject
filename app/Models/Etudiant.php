<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant extends Model
{
    use HasFactory;
    use SoftDeletes;
   protected $table = 'etudiants';
    protected $primaryKey = 'id';
    //protected $dates= ['deleted_at'];
     /**
     * Get the user that owns the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function promotion()
    {
        return $this->belongsTo(Promotion::class,'promotion_id');
    }
    /**

     * The eyewears that belong to the EyewearsColor

     *

     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany

     */

    public function modules()

    {

        return $this->belongsToMany(Module::class, 'notes');

    }

}
