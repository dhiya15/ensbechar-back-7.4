<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
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
        'fr_responsible_name',
        'en_responsible_name',
        'ar_responsible_name',
        'responsible_email',
        'responsible_image',
        'image',
        'is_active'
    ];

    public function setResponsibleImageAttribute($value) {
        $attribute_name = "responsible_image";
        $disk = "public";
        $destination_path = "departments";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }

    public function setImageAttribute($value) {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "departments";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }

    public static function boot() {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public')->delete($obj->image);
        });
        static::deleting(function($obj) {
            \Storage::disk('public')->delete($obj->responsible_image);
        });
    }
}
