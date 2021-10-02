<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Items extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'categoryname',
        'title',
        'description',
        'photo',
        'usprice',
        'lbpprice',
        'marker',
        'quantity',
        'status'
    ];
    public function categories()
    {
        return $this->belongsTo(\App\Models\Categories::class, "category_id");
    }
}
