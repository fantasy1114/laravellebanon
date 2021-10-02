<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userrole',

        'users_view',
        'users_write',
        'users_create',
        'users_delete',
        'users_list',

        'companies_view',
        'companies_write',
        'companies_create',
        'companies_delete',
        'companies_list',

        'categories_view',
        'categories_write',
        'categories_create',
        'categories_delete',
        'categories_list',

        'items_view',
        'items_write',
        'items_create',
        'items_delete',
        'items_list',

        'siteinfo_view',
        'siteinfo_write',
        'siteinfo_create',
        'siteinfo_delete',
        'siteinfo_list',

        'currency_view',
        'currency_write',
        'currency_create',
        'currency_delete',
        'currency_list',
        
    ];

}
