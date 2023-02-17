<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'fax',
        'facebook',
        'instagram',
        'youtube',
        'logo',
        'fr_name',
        'en_name',
        'ar_name',
        'fr_description',
        'en_description',
        'ar_description',
        'fr_working_days',
        'en_working_days',
        'ar_working_days',
        'working_hours',
        'latitude',
        'longitude',
        'fr_address',
        'ar_address',
        'en_address',
        'under_maintenance'
    ];

    public function setLogoAttribute($value)
    {
        $attribute_name = "logo";
        $disk = "public";
        $destination_path = "school";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }

    public static function boot() {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public')->delete($obj->logo);
        });
    }

}
