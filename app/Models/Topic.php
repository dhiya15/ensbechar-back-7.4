<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'image',
        'fr_title',
        'en_title',
        'ar_title',
        'fr_description',
        'en_description',
        'ar_description',
        'multi_image',
        'is_active'
    ];

    public function setImageAttribute($value) {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "topics";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }

    public function setMultiImageAttribute($value)
    {
        $attribute_name = "multi_image";
        $disk = "public";
        $destination_path = "topics";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public static function boot() {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public')->delete($obj->image);
        });
        static::deleting(function($obj) {
            if (count((array)$obj->multi_image)) {
                foreach ((array)$obj->multi_image as $file_path) {
                    \Storage::disk('public')->delete($file_path);
                }
            }
        });
    }
}
