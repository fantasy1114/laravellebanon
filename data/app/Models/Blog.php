<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Blog extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'photo',
        'blog_text',
        'blog_date',
    ];

    // public function companies()
    // {
    //     return $this->belongsTo(\App\Models\Companies::class, "companies_id");
    // }
}
