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
         return $this->belongsTo(Option::class,'opt_id');
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
<<<<<<< HEAD
     public function users()
     {
         return $this->belongsToMany(User::class,'modules');
     }

     
=======
     public function user()
     {
         return $this->belongsTo(User::class,'user_id');
     }
>>>>>>> 2309daef0dc60cd4c0700986cd38f7e42277fbc1

}
