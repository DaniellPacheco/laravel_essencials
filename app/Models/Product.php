<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'exclusive'
    ];

    protected $date = [
        'deleted_at'
    ];

    // relacionamento N produtos <-> 1 categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
