<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;
   protected $table = 'notes';
    protected $primaryKey = 'id';
    //protected $dates= ['deleted_at'];
     /**
     * Get the user that owns the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function notes()
    {
        return $this->HasMany(note::class,'etudiant_id');
    }
    /**

     * The eyewears that belong to the EyewearsColor

     *

     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany

     */

    public function modules()

    {

        return $this->belongsToMany(Module::class, 'module_id');

    }
}
