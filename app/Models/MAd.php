<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MAd extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'fr_title',
        'en_title',
        'ar_title',
        'fr_description',
        'en_description',
        'ar_description',
        'is_active'
    ];
}
