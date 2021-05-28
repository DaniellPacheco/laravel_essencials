<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    // como estamos usando o softdelete, necessitamos chamar os métodos usados nele
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image'
        // não precisamos chamar timestamp ou softdelete pois o laravel gerencia isso sozinho
    ];

    // parte do biblioteca carbo (trabalha com data e hora no laravel)
    protected $date = [
        'deleted_at'
    ];

    // relacionamento 1 cagoria -> N produtos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
