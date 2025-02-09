<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Job extends Model 
{
    use HasFactory , HasTranslations;

    public $translatable = ['title', 'description'];
    public $table = 'jobs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    protected static function booted()
    {
        static::retrieved(function ($model) {
            foreach ($model->getTranslatableAttributes() as $name) {
                $fallbackLocale = app()->getLocale() === 'ar' ? 'en' : 'ar';
                $model->{$name} = $model->getTranslation($name,app()->getLocale()) ?  $model->getTranslation($name,app()->getLocale()) :  $model->getTranslation($name, $fallbackLocale) ;
            }
        });
    }
}
