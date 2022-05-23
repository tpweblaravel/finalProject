<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $primaryKey = 'id';
     public function option()
     {
         return $this->belongsTo(Option::class);
     }
     /**

      * The eyewears that belong to the EyewearsColor

     *

      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany

      */

     public function etudiants()

     {

         return $this->belongsToMany(Etudiant::class, 'notes');

     }

}
