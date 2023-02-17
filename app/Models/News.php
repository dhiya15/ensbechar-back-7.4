<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
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
        'multi_image',
        'is_active'
    ];

    public function setMultiImageAttribute($value)
    {
        $attribute_name = "multi_image";
        $disk = "public";
        $destination_path = "news";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public static function boot() {
        parent::boot();
        static::deleting(function($obj) {
            if (count((array)$obj->multi_image)) {
                foreach ((array)$obj->multi_image as $file_path) {
                    \Storage::disk('public')->delete($file_path);
                }
            }
        });
    }
}
