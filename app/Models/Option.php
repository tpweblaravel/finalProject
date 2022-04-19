<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Option extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'options';

    protected $primaryKey = 'id';
    /**
     * Get all of thn promotions for the Option
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }
    // public function modules()
    // {
    //     return $this->hasMany(Module::class);
    // }
}
