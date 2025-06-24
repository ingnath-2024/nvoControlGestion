<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatOrigen extends Model
{
    use HasFactory;

    protected $table = 'cat_origen';

    protected $primaryKey = 'id_cat_origen';

    public $incrementing = false;

    protected $keyType = 'int';

    protected $fillable = ['id_cat_origen', 'descripcion'];

}